<template>
    <div class="row mb-30 border-bottom pb-10">
        <div class="col-sm-6 align-self-center">
            <div class="d-flex flex-row justify-content-md-between align-items-center w-100 w-100 contact-actions">
                <input type="checkbox" role="button" :disabled="emails.length === 0"
                       data-bs-toggle="tooltip" data-bs-placement="auto" title="Seleccionar todos"
                       v-model="selectAll" @change="selectAllEmails(selectAll)"/>

                <template v-if="selectedEmails.length !== 0">
                    <i class="icon material-icons md-star mr-5 d-none d-md-block" role="button"
                       data-bs-toggle="tooltip" data-bs-placement="auto" title="Marcar como favorito"
                       @click="markAllAsFavorite">
                    </i>

                    <i class="icon material-icons md-bookmark mr-5 d-none d-md-block" role="button"
                       data-bs-toggle="tooltip" data-bs-placement="auto" title="Marcar como importante"
                       @click="markAllAsImportant">
                    </i>
                    <i class="icon material-icons md-mark_email_read mr-5 d-none d-md-block" role="button"
                       data-bs-toggle="tooltip" data-bs-placement="auto" title="Marcar como leido"
                       @click="markAllAsRead"
                    >
                    </i>
                    <i class="icon material-icons md-delete d-none d-md-block" role="button"
                       data-bs-toggle="tooltip" data-bs-placement="auto" title="Eliminar"
                       @click="deleteEmails">
                    </i>
                </template>

                <div v-if="selectedEmails.length !== 0" class="dropdown d-block d-md-none mb-10">
                    <button
                        class="btn btn-primary dropdown-toggle ml-10"
                        :class="{'disabled': emails.length === 0}"
                        type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Acciones
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1"
                        role="menu">
                        <li class="dropdown-item">Marcar como leido</li>
                        <li class="dropdown-item">Marcar como no leido</li>
                        <li class="dropdown-item">Marcar como importante</li>
                        <li class="divider"></li>
                        <li class="dropdown-item text-danger">Eliminar</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6 search-form mt-5">
            <form action="#" id="search-email" class="text-right">
                <div class="input-group">
                    <input type="text" class="form-control form-control-sm"
                           placeholder="Buscar por cliente" :disabled="emails.length === 0">
                    <span class="input-group-btn">
                        <button name="search" class="btn btn-primary h-100"
                                :class="{'disabled': emails.length === 0}">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
            </form>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table">
            <tbody>
            <tr v-if="emails.length === 0">No hay ningun correo</tr>
            <Email v-else v-for="email in emails" :key="email.id" :email="email" :select-all="selectAll"
                   @send-email="sendEmailToModal"/>
            </tbody>
        </table>
    </div>

    <div class="pagination-area mt-15 mb-50">
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-start d-flex flex-wrap">
                <li v-for="link in links" :key="link.label"
                    class="page-item mb-2"
                    :class="{ 'active': link.active, 'disabled': link.url === null}">
                    <button class="page-link"
                            @click="pagination(link.url)"
                            v-html="link.label">
                    </button>
                </li>
            </ul>
        </nav>
    </div>

    <ReplyEmail v-if="replyEmail" :modal="replyEmail" :email="emailData"/>
</template>

<script>
import Email from './Email'
import useEmails from "../composables/useEmails";
import useSelect from "../composables/useSelect";
import {setUrlPagination} from "../store/contact/mutations";
import {useStore} from "vuex";
import {ref} from "vue";
import ReplyEmail from "../modals/ReplyEmail";
import useModal from "../../../composables/useModal";

export default {
    name: "EmailsTable",
    components: {Email, ReplyEmail},
    setup() {
        const store = useStore()
        const {getEmails, emails, links} = useEmails()
        const {replyEmail} = useModal()
        const {
            selectAllEmails,
            selectAll,
            selectedEmails,
            markAllAsRead,
            markAllAsFavorite,
            markAllAsImportant,
            deleteEmails
        } = useSelect()

        const emailData = ref({})

        return {
            //useEmails
            emails,
            links,
            getEmails,
            //pagination
            pagination: (url) => {
                store.commit('contact/setUrlPagination', url)
                getEmails({})
            },
            //useSelect
            selectAllEmails,
            selectAll,
            selectedEmails,
            markAllAsRead,
            markAllAsFavorite,
            markAllAsImportant,
            deleteEmails,
            //reply email modal
            replyEmail,
            emailData,
            sendEmailToModal: (email) => emailData.value = email
        }

    }
}
</script>

<style scoped>

</style>
