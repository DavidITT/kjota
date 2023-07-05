<template>
    <section class="content-body p-xl-4">
        <div v-if="loader"
             class="d-flex w-100 h-100 flex-row justify-content-center align-items-center">
            <div class="spinner-grow spinner-grow-sm mr-10" role="status"></div>
            <div class="spinner-grow spinner-grow-sm mr-10" role="status"></div>
            <div class="spinner-grow spinner-grow-sm" role="status"></div>
        </div>
        <div v-else>
            <form @submit.prevent="saveInfo">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row gx-3">
                            <div class="col-6  mb-3">
                                <label class="form-label"> Nombre(s)</label>
                                <input class="form-control"
                                       :class="{'is-invalid': v$.name.$dirty && v$.name.$error}"
                                       type="text" placeholder="Nombre" v-model="userData.name">
                                <div class="text-sm mt-2">
                                    <p class="text-danger" v-for="error in v$.name.$errors" :key="error.$uid">
                                        <span>{{ error.$message }}</span>
                                    </p>
                                </div>
                            </div>
                            <div class="col-6  mb-3">
                                <label class="form-label">Apellidos(s)</label>
                                <input class="form-control" type="text"
                                       :class="{'is-invalid': v$.lastname.$dirty && v$.lastname.$error}"
                                       placeholder="Apellidos" v-model="userData.lastname">
                                <div class="text-sm mt-2">
                                    <p class="text-danger" v-for="error in v$.lastname.$errors" :key="error.$uid">
                                        <span>{{ error.$message }}</span>
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6  mb-3">
                                <label class="form-label">Correo electrónico</label>
                                <input class="form-control" type="email"
                                       :class="{'is-invalid': v$.email.$dirty && v$.email.$error}"
                                       placeholder="Correo electrónico" v-model="userData.email">
                                <div class="text-sm mt-2">
                                    <p class="text-danger" v-if="errors !== ''">
                                        <span>{{ errors }}</span>
                                    </p>
                                </div>
                                <div class="text-sm mt-2">
                                    <p class="text-danger" v-for="error in v$.email.$errors" :key="error.$uid">
                                        <span>{{ error.$message }}</span>
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6  mb-3">
                                <label class="form-label">Telefono</label>
                                <input class="form-control" type="tel"
                                       :class="{'is-invalid': v$.phone.$dirty && v$.phone.$error}"
                                       placeholder="Telefono" v-model="userData.phone">
                                <div class="text-sm mt-2">
                                    <p class="text-danger" v-for="error in v$.phone.$errors" :key="error.$uid">
                                        <span>{{ error.$message }}</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <aside class="col-lg-4 upload-image">
                        <figure class="text-lg-center text-center">
                            <img class="img-lg img-avatar rounded-circle"
                                 src="https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50?s=200"
                                 alt="User Photo">
                            <figcaption>
                                <input type="file" id="file-input">
                                <label for="file-input">
                                    <i class="fi-rs-camera bg-primary rounded-circle p-2" role="button"></i>
                                </label>
                            </figcaption>
                        </figure>
                    </aside>
                </div>
                <br>
                <div class="w-100  text-center text-lg-start">
                    <button class="btn btn-primary btn-small" :disabled="isFormUnchanged" type="submit">Guardar
                        cambios
                    </button>
                </div>
            </form>
        </div>
        <hr class="my-5">
        <div class="row" style="max-width:920px">
            <div class="col-md-12 col-lg-6">
                <article class="box mb-3 bg-light p-2">
                    <a class="btn float-end btn-light rounded btn-sm font-md" :href="routeToChangePassword">Cambiar</a>
                    <h6>Contraseña</h6>
                    <small class="text-muted d-block" style="width:70%">Puedes cambiar tu contraseña
                        haciendo clic aquí</small>
                </article>
            </div>
            <div class="col-md-12 col-lg-6">
                <article class="box mb-3 bg-light p-2">
                    <button class="btn float-end btn-light rounded btn-sm font-md" @click="deactivateAccount">Desactivar</button>
                    <h6>Desactivar Cuenta</h6>
                    <small class="text-muted d-block" style="width:70%">Una vez que desactives tu cuenta <br> ya no podras entrar a ella.</small>
                </article>
            </div>
        </div>
    </section>

</template>

<script>
import {onMounted, reactive, ref, computed} from "vue";
import useAlerts from "../../../composables/useAlerts";
import {email, helpers, required, minLength, maxLength} from "@vuelidate/validators";
import useVuelidate from "@vuelidate/core/dist/index.mjs";
import Swal from "sweetalert2";

export default {
    name: "General",
    props: {
        routeToChangePassword: String
    },
    setup(props) {
        const {errorMessage, successMessage} = useAlerts()
        const userData = reactive({
            name: '',
            lastname: '',
            phone: '',
            email: ''
        })
        const initialData = reactive({
            name: '',
            lastname: '',
            phone: '',
            email: ''
        })
        const errors = ref('')
        const loader = ref(false)

        const rules = {
            name: {
                required: helpers.withMessage('El nombre es requerido.', required),
            },
            lastname: {
                required: helpers.withMessage('Los apellidos son requeridos.', required),
            },
            phone: {
                required: helpers.withMessage('El numero telefonico es requerido.', required),
                minLength: helpers.withMessage('El numero telefonico tiene un formato incorrecto.', minLength(10)),
                maxLength: helpers.withMessage('El numero telefonico tiene un formato incorrecto.', maxLength(10)),
            },
            email: {
                required: helpers.withMessage('El correo electronico es requerido.', required),
                email: helpers.withMessage('El correo electronico es invalido.', email)
            }
        }

        const v$ = useVuelidate(rules, userData)

        const getGeneralInfo = async () => {
            loader.value = true
            await axios.get('/profile/get-info')
                .then(({data, status}) => {
                    if (status === 200) {
                        userData.name = data.name
                        userData.lastname = data.lastname
                        userData.email = data.email
                        userData.phone = data.phone

                        initialData.name = data.name
                        initialData.lastname = data.lastname
                        initialData.email = data.email
                        initialData.phone = data.phone
                        loader.value = false
                    }
                })
                .catch((error) => {
                    loader.value = false
                    errorMessage('Ocurrio un error al intentar obtener los datos')
                })
        }

        const saveInfo = async () => {
            const result = await v$.value.$validate();
            if (!result) return
            loader.value = true
            await axios.post('profile/save/info', userData)
                .then(({data, status}) => {
                    if (status === 200) {
                        successMessage(data.message)
                        loader.value = false
                    }
                })
                .catch((error) => {
                    loader.value = false
                    if (error.response.data.message !== undefined) {
                        errors.value = error.response.data.message
                    } else {
                        errorMessage('Ocurrio un error al actualizar la información, intentelo mas tarde')
                    }
                })
        }

        const deactivateAccount = async () => {
            Swal.fire({
                title: '¿Esta seguro de desactivar su cuenta?',
                text: "Esta acción no puede revertirse y una vez confirma, no podra ingresar a la misma.",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#095CAA',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, estoy consiente'
            }).then(async (result) => {
                if (result.isConfirmed) {
                    await axios.post('profile/deactivate/account')
                        .then(({data, status}) => {

                        })
                }
            })
        }
        const isFormUnchanged = computed(() => {
            return (
                initialData.name === userData.name &&
                initialData.lastname === userData.lastname &&
                initialData.email === userData.email &&
                initialData.phone === userData.phone
            )
        })


        onMounted(() => {
            getGeneralInfo()
        })

        return {
            loader,
            userData,
            saveInfo,
            v$,
            errors,
            isFormUnchanged,
            deactivateAccount,
            routeToChangePassword: props.routeToChangePassword
        }
    }
}
</script>

<style scoped>

</style>
