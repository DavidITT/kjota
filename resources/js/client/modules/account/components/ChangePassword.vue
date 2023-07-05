<template>
    <div class="row">

        <div class="col-12 col-lg-6">
            <form @submit.prevent="changePassword" class="mtb-30">
                <div class="d-flex d-inline align-items-center">
                    <input class="form-control px-2" type="password" id="old-password"
                           placeholder="Antigua contraseña" v-model="oldPass"
                           :class="{'is-invalid': v$.oldPass.$dirty && v$.oldPass.$error}">
                    <i role="button"
                       class="fa-xl p-2"
                       @click="switchVisibility('old')"
                       :class="{ 'fi-rs-eye': showPassword.old, 'fi-rs-eye-crossed': !showPassword.old }"></i>
                </div>
                <div class="text-sm mb-2">
                    <p class="text-danger" v-for="error in v$.oldPass.$errors" :key="error.$uid">
                        <span>{{ error.$message }}</span>
                    </p>
                </div>
                <div class="d-flex d-inline align-items-center">
                    <input class="form-control px-2" type="password" id="new-password"
                           placeholder="Nueva contraseña" v-model="newPass"
                           :class="{'is-invalid': v$.newPass.$dirty && v$.newPass.$error}">
                    <i role="button"
                       class="fa-xl p-2"
                       @click="switchVisibility('new')"
                       :class="{ 'fi-rs-eye': showPassword.new, 'fi-rs-eye-crossed': !showPassword.new }"></i>
                </div>
                <div class="text-sm mb-2">
                    <p class="text-danger" v-for="error in v$.newPass.$errors" :key="error.$uid">
                        <span>{{ error.$message }}</span>
                    </p>
                </div>
                <div class="d-flex d-inline align-items-center">
                    <input class="form-control px-2" type="password" id="confirm-password"
                           placeholder="Confirma nueva contraseña" v-model="confirmPass"
                           :class="{'is-invalid': v$.confirmPass.$dirty && v$.confirmPass.$error}">
                    <i role="button"
                       class="fa-xl p-2"
                       @click="switchVisibility('confirm')"
                       :class="{ 'fi-rs-eye': showPassword.confirm, 'fi-rs-eye-crossed': !showPassword.confirm }"></i>
                </div>
                <div class="text-sm mb-3">
                    <p class="text-danger" v-for="error in v$.confirmPass.$errors" :key="error.$uid">
                        <span>{{ error.$message }}</span>
                    </p>
                </div>
                <div class="d-flex flex-row">
                    <button :disabled="loader" class="btn btn-primary btn-small mr-5" type="submit">Cambiar</button>
                    <div v-if="loader" class="spinner-border text-brand" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-12 col-lg-6 text-center align-self-center">
            <i class="fa-solid fa-key fa-flip-horizontal fa-7x bg-grey-4 text-white p-4 rounded-circle"></i>
        </div>
    </div>
</template>

<script>
import {onMounted, reactive, ref, nextTick} from "vue";
import {sameAs, required, minLength, helpers} from "@vuelidate/validators";
import {useVuelidate} from '@vuelidate/core';
import useAlerts from "../../../composables/useAlerts";

export default {
    name: "ChangePassword",
    setup() {

        const {successMessage, errorMessage} = useAlerts()
        // Query Selector
        const oldPassword = ref(null)
        const newPassword = ref(null)
        const confirmPassword = ref(null)

        const showPassword = reactive({
            old: false,
            new: false,
            confirm: false
        })

        const loader = ref(false)

        //V-Models
        const oldPass = ref('')
        const newPass = ref('')
        const confirmPass = ref('')

        const rules = {
            oldPass: {
                required: helpers.withMessage('Para cambiar la contraseña es necesario su antigua contraseña.', required),
            },
            newPass: {
                required: helpers.withMessage('Es requerido que ingrese la nueva contraseña.', required),
                minLength: helpers.withMessage('La contraseña debe tener un minimo de 8 caracteres.', minLength(8)),
            },
            confirmPass: {
                required: helpers.withMessage('Es necesario que confirme la nueva contraseña.', required),
                sameAsPassword: helpers.withMessage('Las contraseñas no coinciden.', sameAs(newPass)),
            }
        }

        const v$ = useVuelidate(rules, {oldPass, newPass, confirmPass})

        const switchVisibility = (input) => {
            switch (input) {
                case 'old':
                    if (oldPassword.value.getAttribute('type') === 'password') {
                        oldPassword.value.setAttribute('type', 'text')
                        showPassword.old = true
                    } else {
                        oldPassword.value.setAttribute('type', 'password')
                        showPassword.old = false
                    }
                    break

                case 'new':
                    if (newPassword.value.getAttribute('type') === 'password') {
                        newPassword.value.setAttribute('type', 'text')
                        showPassword.new = true
                    } else {
                        newPassword.value.setAttribute('type', 'password')
                        showPassword.new = false
                    }
                    break;

                case 'confirm':
                    if (confirmPassword.value.getAttribute('type') === 'password') {
                        confirmPassword.value.setAttribute('type', 'text')
                        showPassword.confirm = true
                    } else {
                        confirmPassword.value.setAttribute('type', 'password')
                        showPassword.confirm = false
                    }
                    break;
            }
        }

        const changePassword = async () => {
            const result = await v$.value.$validate();
            if (!result) return
            loader.value = true
            let data = {
                'old-password': oldPass.value,
                'new-password': newPass.value,
                'confirm-password': confirmPass.value
            }
            await axios.post('/profile/change-password', data)
                .then(({data, status}) => {
                    if (status === 200) {
                        loader.value = false
                        cleanData()
                        successMessage(data.message)
                    }
                })
                .catch((error) => {
                    loader.value = false
                    errorMessage(error.response.data.message)
                })
        }

        const cleanData = () => {
            oldPass.value = ''
            newPass.value = ''
            confirmPass.value = ''
            nextTick(() => {
                v$.value.$reset()
            })
        }

        onMounted(() => {
            oldPassword.value = document.querySelector('#old-password')
            newPassword.value = document.querySelector('#new-password')
            confirmPassword.value = document.querySelector('#confirm-password')
        })

        return {
            oldPass,
            newPass,
            confirmPass,
            loader,
            showPassword,
            switchVisibility,
            changePassword,
            v$
        }
    }
}
</script>

<style scoped>

</style>
