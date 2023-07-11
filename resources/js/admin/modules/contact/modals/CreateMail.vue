<template>
    <!-- Modal -->
    <div class="modal fade" :class="{show:modal}" tabindex="-1" role="dialog">
        <div class="modal-wrapper">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="createMailModalLabel">Redactar Correo</h5>
                        <i class="icon material-icons md-close" role="button" v-if="!loader"
                           @click="handleModal({modal:'create',statusModal:false})"></i>
                    </div>

                    <form @submit.prevent="submitForm" method="post">
                        <div class="modal-body">
                            <div class="mb-3">
                                <p><strong>Instrucciones: </strong>Envia un correo electrónico rapido al cliente desde
                                    aqui</p>
                            </div>
                            <div class="form-group mb-2">
                                <input name="to" type="text" class="form-control"
                                       :class="{'is-invalid': v$.to.$dirty && v$.to.$error}"
                                       placeholder="Para: example@gmail.com"
                                       v-model="emailData.to">
                                <div class="text-danger mt-2">
                                    <p v-for="error in v$.to.$errors" :key="error.$uid">
                                        <span>{{ error.$message }}</span>
                                    </p>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <input name="subject" type="text" class="form-control"
                                       :class="{'is-invalid': v$.subject.$dirty && v$.subject.$error}"
                                       placeholder="Asunto"
                                       v-model="emailData.subject">
                                <div class="text-danger mt-2">
                                    <p v-for="error in v$.subject.$errors" :key="error.$uid">
                                        <span>{{ error.$message }}</span>
                                    </p>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea name="message" id="email_message" class="form-control"
                                          :class="{'is-invalid': v$.message.$dirty && v$.message.$error}"
                                          placeholder="Mensaje"
                                          v-model="emailData.message"
                                          style="height: 120px;"></textarea>
                                <div class="text-danger mt-2">
                                    <p v-for="error in v$.message.$errors" :key="error.$uid">
                                        <span>{{ error.$message }}</span>
                                    </p>
                                </div>
                            </div>
                        </div>


                        <div class="modal-footer">
                            <div v-if="loader" class="spinner-border text-brand" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <button v-else type="button" class="btn btn-default"
                                    @click="handleModal({modal:'create',statusModal:false})"><i
                                class="fa fa-times"></i> Descartar
                            </button>
                            <button :disabled="loader" type="submit" class="btn btn-primary pull-right"><i
                                class="fa fa-envelope"></i> Enviar Mensaje
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</template>

<script>
import useAlerts from "../../../composables/useAlerts";
import useModal from "../composables/useModal";
import {reactive, ref} from "vue";
import useVuelidate from '@vuelidate/core'
import {required, email, helpers} from '@vuelidate/validators'


export default {
    name: "CreateMail",
    props: {
        modal: Boolean
    },
    setup(props) {
        const {handleModal} = useModal()
        const {successMessage, errorMessage} = useAlerts()
        const loader = ref(false)

        const emailData = reactive({
            to: '',
            subject: '',
            message: ''
        })

        const rules = {
            to: {
                required: helpers.withMessage('El correo de destino es obligatorio.', required),
                email: helpers.withMessage('Ingrese un correo electronico valido.', email)
            },
            subject: {required: helpers.withMessage('El asunto del correo es obligatorio.', required)},
            message: {required: helpers.withMessage('El mensaje del correo es obligatorio.', required)}
        }

        const v$ = useVuelidate(rules, emailData)

        const submitForm = async () => {
            const result = await v$.value.$validate();
            if (!result) return
            loader.value = true
            await axios.post('contact/send/email',emailData)
                .then(({data, status}) => {
                    if (status === 200) {
                        successMessage(data.message)
                        loader.value = false
                        handleModal({modal:'create',statusModal:false})
                    }
                })
                .catch((error) => {
                    loader.value = false
                    errorMessage('Ocurrio un error al enviar correo, intentelo mas tarde')
                })
        }

        return {
            modal: props.modal,
            handleModal,
            emailData,
            v$, //vuelidate variable
            submitForm,
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
