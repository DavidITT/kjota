<template>
    <div class="modal fade" :class="{show:modal}" tabindex="-1" role="dialog">
        <div class="modal-wrapper">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header justify-content-end">
                        <i class="icon material-icons md-close" role="button" v-if="!loader"
                           @click="closeModal"></i>
                    </div>
                    <form @submit.prevent="replyEmail" class="reply-email">
                        <div class="modal-body">
                            <div class="row p-20">
                                <div class="d-flex d-inline font-lg">
                                    <i class="icon material-icons md-reply"></i>
                                    <p class="mb-0 text-black"><span class="h6">{{ clientInfo.name }}</span>
                                        {{ `<${formData.to}>` }}</p>
                                </div>
                                <div class="d-flex d-inline mb-30">
                                    <p class="font-xs text-black-50 mr-5">
                                        <i class="icon material-icons md-phone"></i>
                                        {{ clientInfo.phone }}
                                    </p>
                                    <p class="font-xs text-black-50">
                                        <i class="icon material-icons md-calendar_today"></i>
                                        {{ clientInfo.date }}
                                    </p>
                                </div>
                                <div class="d-flex mb-5">
                                    {{ clientInfo.message }}
                                </div>
                            </div>
                            <hr>
                            <div class="row mtb-40">
                                <h6 class="mb-20">Redactar respuesta</h6>
                                <div class="form-group mb-2">
                                    <input v-model="formData.subject" placeholder="Asunto"
                                           class="form-control form-control-sm bg-white"
                                           :class="{'is-invalid': v$.subject.$dirty && v$.subject.$error}"
                                           type="text"/>
                                    <div class="text-danger mt-2">
                                        <p v-for="error in v$.subject.$errors" :key="error.$uid">
                                            <span>{{ error.$message }}</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                <textarea v-model.trim="formData.message" name="message" id="email_message"
                                          class="form-control form-control-sm"
                                          :class="{'is-invalid': v$.message.$dirty && v$.message.$error}"
                                          rows="5" placeholder="Mensaje"></textarea>
                                    <div class="text-danger mt-2">
                                        <p v-for="error in v$.message.$errors" :key="error.$uid">
                                            <span>{{ error.$message }}</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <div v-if="loader" class="spinner-border text-brand" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <button v-else type="button" class="btn btn-default"
                                    @click="closeModal"><i
                                class="fa fa-times"></i> Descartar
                            </button>
                            <button :disabled="loader" type="submit" class="btn btn-primary pull-right"><i
                                class="fa fa-envelope"></i> Responder
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</template>

<script>
import useModal from "../../../composables/useModal";
import {reactive, ref} from "vue";
import useVuelidate from '@vuelidate/core'
import {required, email, helpers} from '@vuelidate/validators'
import useAlerts from "../../../composables/useAlerts";

export default {
    name: "ReplyEmail",

    props: {
        modal: Boolean,
        email: Object
    },

    setup(props) {
        const {handleModal} = useModal()
        const {successMessage, errorMessage} = useAlerts()
        const loader = ref(false)

        const clientInfo = {
            to: props.email.email,
            name: props.email.name,
            phone: props.email.phone,
            subject: props.email.subject,
            message: props.email.message,
            date: props.email.created_at,
        }

        const closeModal = () => {
            handleModal({modal: 'reply', statusModal: false})
        }

        const formData = reactive({
            to: props.email.email,
            client: props.email.name,
            subject: '',
            message: '',
        })

        const rules = {
            subject: {required: helpers.withMessage('El asunto del correo es obligatorio.', required)},
            message: {required: helpers.withMessage('El mensaje del correo es obligatorio.', required)}
        }

        const v$ = useVuelidate(rules, formData)


        const replyEmail = async () => {
            const result = await v$.value.$validate();
            if (!result) return
            loader.value = true
            await axios.post('contact/reply/email', formData)
                .then(({data, status}) => {
                    if (status === 200) {
                        successMessage(data.message)
                        loader.value = false
                        closeModal()
                    }
                })
                .catch((error) => {
                    loader.value = false
                    errorMessage('Ocurrio un error al enviar correo, intentelo mas tarde')
                })
        }

        return {
            closeModal,
            modal: props.modal,
            clientInfo,
            formData,
            replyEmail,
            v$,
            loader
        }
    }
}
</script>

<style scoped>
.show {
    display: list-item;
    opacity: 1;
    background: rgba(32, 38, 38, 0.3);
}

</style>
