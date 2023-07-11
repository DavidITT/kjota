<template>
    <!-- Modal -->
    <div class="modal fade" :class="{show:editBranch}" tabindex="-1" role="dialog">
        <div class="modal-wrapper">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="createMailModalLabel">Editar Sucursal</h5>
                        <i class="icon material-icons md-close" role="button" @click="handleModal({modal:'edit', status:false})"></i>
                    </div>

                    <!--                    <form @submit.prevent="submitForm" method="post">
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
                                        </form>-->
                </div>
            </div>
        </div>

    </div>
</template>

<script>
import UseModal from "../composables/useModal";

export default {
    name: "EditBranch",
    setup() {

        const {editBranch, handleModal} = UseModal()

        return {
            editBranch,
            handleModal
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
