<template>
    <div class="row">
        <!-- BEGIN INBOX -->
        <div class="col-md-12">
            <div class="grid email">
                <div class="grid-body">
                    <div class="row">
                        <div class="col-md-3 border-end">
                            <h2 class="grid-title"><i :class="title.icon"></i> {{ title.label }}</h2>
                            <button type="button" class="btn btn-primary" @click="handleModal({modal:'create',statusModal:true})">
                                <i class="fa fa-pencil"></i>Nuevo
                            </button>
                            <CreateMail v-if="createModal" :modal="createModal"/>
                            <hr>
                            <div>
                                <div class="dashboard-menu">
                                    <ul class="nav flex-column menu-aside" role="tablist">
                                        <li class="menu-item" :class="currentTab === 'allEmails' ? 'active' : ''">
                                            <a class="menu-link" id="allEmails-tab" data-bs-toggle="tab"
                                               href="#allEmails" role="tab" aria-controls="allEmails"
                                               :aria-selected="currentTab === 'allEmails'"
                                               @click="getEmailsByTerm('allEmails','all')">
                                                <i class="icon material-icons md-inbox"></i>
                                                <span class="text"> Inbox ({{ unreadEmails }})</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" :class="currentTab === 'favoriteEmails' ? 'active' : ''">
                                            <a class="menu-link" id="favoriteEmails-tab" data-bs-toggle="tab"
                                               href="#favoriteEmails"
                                               role="tab" aria-controls="favoriteEmails"
                                               :aria-selected="currentTab === 'favoriteEmails'"
                                               @click="getEmailsByTerm('favoriteEmails','favorites')">
                                                <i class="icon material-icons md-star"></i>
                                                <span class="text"> Favoritos</span>
                                            </a>
                                        </li>
                                        <li class="menu-item" :class="currentTab === 'importantEmails' ? 'active' : ''">
                                            <a class="menu-link" id="importantEmails-tab" data-bs-toggle="tab"
                                               href="#importantEmails"
                                               role="tab" aria-controls="importantEmails"
                                               :aria-selected="currentTab === 'importantEmails'"
                                               @click="getEmailsByTerm('importantEmails','important')">
                                                <i class="icon material-icons md-bookmark"></i>
                                                <span class="text"> Importantes</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <hr class="d-block d-md-none mb-40">
                            <div v-if="loader"
                                 class="d-flex w-100 h-100 flex-row justify-content-center align-items-center">
                                <div class="spinner-grow spinner-grow-sm mr-10" role="status"></div>
                                <div class="spinner-grow spinner-grow-sm mr-10" role="status"></div>
                                <div class="spinner-grow spinner-grow-sm" role="status"></div>
                            </div>

                            <div class="tab-content dashboard-content" v-else>
                                <div class="tab-pane fade" :class="currentTab === idTab ? 'active show' : ''"
                                     :id="idTab" role="tabpanel" :aria-labelledby="`${idTab}-tab`">
                                    <EmailsTable/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import CreateMail from "./modals/CreateMail";
import ReplyEmail from "./modals/ReplyEmail";
import EmailsTable from "./components/EmailsTable";
import {onMounted, reactive, ref, watch} from "vue";
import useEmails from "./composables/useEmails";
import {useStore} from "vuex";
import useModal from "../../composables/useModal";


export default {
    name: "Contact",
    components: {CreateMail, EmailsTable, ReplyEmail},

    setup() {
        const store = useStore()
        const {createModal, handleModal} = useModal()

        const title = reactive({
            label: 'Bandeja',
            icon: 'fa fa-inbox'
        })
        const currentTab = ref('allEmails')
        const idTab = ref('allEmails')

        const {getEmails, links, loader, unreadEmails} = useEmails()

        const getEmailsByTerm = (current, type) => {
            currentTab.value = current
            idTab.value = current
            store.commit('contact/setUrlPagination', null)
            getEmails({type: type})
        }

        onMounted( () => {
            const emails = getEmails({})
        })

        watch(currentTab, (newVal) => {
            switch (newVal) {

                case 'allEmails':
                    title.label = 'Bandeja'
                    title.icon = 'fa fa-inbox'
                    break

                case 'favoriteEmails':
                    title.label = 'Favoritos'
                    title.icon = 'fa fa-star'
                    break;

                case 'importantEmails':
                    title.label = 'Importantes'
                    title.icon = 'fa fa-bookmark'
                    break
            }
        })

        return {
            title,
            currentTab,
            idTab,
            getEmailsByTerm,
            //Composable
            getEmails,
            links,
            unreadEmails,
            loader,
            //Modal
            createModal,
            handleModal
        }
    }
}
</script>

<style scoped>

</style>
