<template>
    <form @submit.prevent="sendForm">
        <h5 class="mb-30">Crear sucursal</h5>
        <div class="mb-4">
            <label for="branch_name" class="form-label">Nombre</label>
            <input type="text" placeholder=""
                   class="form-control"
                   :class="{'is-invalid': v$.name.$dirty && v$.name.$error}"
                   id="branch_name" v-model="formData.name"/>
            <div class="text-sm mt-2">
                <p class="text-danger" v-for="error in v$.name.$errors" :key="error.$uid">
                    <span>{{ error.$message }}</span>
                </p>
            </div>
        </div>
        <div class="mb-4">
            <label for="branch_direction" class="form-label">Dirección</label>
            <input type="text" placeholder=""
                   :class="{'is-invalid': v$.address.$dirty && v$.address.$error}"
                   class="form-control" id="branch_direction" v-model="formData.address"/>
            <div class="text-sm mt-2">
                <p class="text-danger" v-for="error in v$.address.$errors" :key="error.$uid">
                    <span>{{ error.$message }}</span>
                </p>
            </div>
        </div>
        <div class="mb-4">
            <label for="branch_phone" class="form-label">Telefono</label>
            <input type="number" placeholder=""
                   class="form-control"
                   :class="{'is-invalid': v$.phone.$dirty && v$.phone.$error}"
                   id="branch_phone" v-model="formData.phone"/>
            <div class="text-sm mt-2">
                <p class="text-danger" v-for="error in v$.phone.$errors" :key="error.$uid">
                    <span>{{ error.$message }}</span>
                </p>
            </div>
        </div>
        <div class="mb-4">
            <label for="branch_img" class="form-label">Imagen</label>
            <input type="file" class="form-control" id="branch_img"
                   accept="image/x-png,image/jpg,image/jpeg"
                   :class="{'is-invalid': v$.img.$dirty && v$.img.$error}"
                   @change="onImageChange"/>
            <div class="text-sm mt-2">
                <p v-if="errors.length !== 0" class="text-danger">
                    <span>{{ errors }}</span>
                </p>
                <p v-else class="text-danger" v-for="error in v$.img.$errors" :key="error.$uid">
                    <span>{{ error.$message }}</span>
                </p>
            </div>
        </div>
        <div class="form-check mb-2">
            <input class="form-check-input" type="checkbox" value="1" id="branch_status" v-model="formData.status"/>
            <label for="branch_status" class="form-label">Habilitado</label>
        </div>
        <div v-if="imagePreview" class="d-flex flex-column mb-4 align-items-end w-100">
            <p class="float-left">Imagen previa</p>
            <img :src="imagePreview" class="rounded img-fluid" width="100" height="auto" alt="...">
        </div>
        <div class="d-grid">
            <button class="btn btn-primary" type="submit">Crear sucursal</button>
        </div>
    </form>
</template>

<script>
import {nextTick, reactive, ref} from "vue";
import useBranch from "../composables/useBranch";
import {helpers, required, minLength, maxLength} from "@vuelidate/validators";
import useVuelidate from "@vuelidate/core/dist/index.mjs";
import useAlerts from "../../../../composables/useAlerts";

export default {
    name: "BranchForm",
    setup() {
        const {store, getBranches} = useBranch()
        const {successMessage, errorMessage} = useAlerts()
        const imagePreview = ref(null)
        const errors = ref([])

        const formData = reactive({
            name: null,
            address: null,
            phone: null,
            img: null,
            status: false
        })

        const rules = {
            name: {
                required: helpers.withMessage('El nombre es requerido.', required),
            },
            address: {
                required: helpers.withMessage('La dirección es requerida.', required),
            },
            phone: {
                required: helpers.withMessage('El numero telefonico es requerido.', required),
                minLength: helpers.withMessage('El numero telefonico tiene un formato incorrecto.', minLength(10)),
                maxLength: helpers.withMessage('El numero telefonico tiene un formato incorrecto.', maxLength(10)),
            },
            img:{
                required: helpers.withMessage('Es requerido que suba una foto de la sucursal', required)
            }
        }

        const onImageChange = (event) => {
            const file = event.target.files[0];
            if (!file.type.startsWith('image/')) return errors.value = 'Este tipo de archivo no es permitido'

             const reader = new FileReader()
             reader.onload = (e) => {
                 imagePreview.value = e.target.result
             }
             reader.readAsDataURL(file)

            formData.img = event.target.files[0];
            errors.value = []
        }

        const sendForm = async () => {
            const result = await v$.value.$validate();
            if (!result) return
            let data = new FormData();

            data.append('name', formData.name)
            data.append('address', formData.address)
            data.append('phone', formData.phone)
            data.append('img', formData.img)
            data.append('status', formData.status)

            await axios.post('branch/create', data, {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            }).then(async ({data, status}) => {
                if (status === 200) {
                    store.commit('branches/setUrl', null)
                    successMessage(data.message)
                    clearData()
                    await getBranches()
                }
            }).catch(error => {
                errorMessage('Ocurrio un error al intentar crear la sucursal')
            })
        }

        const clearData = () => {
            formData.name = null
            formData.address = null
            formData.phone = null
            formData.img = null
            formData.status = null
            imagePreview.value = null

            nextTick(() => {
                v$.value.$reset()
            })
        }

        const v$ = useVuelidate(rules, formData)

        return {
            formData,
            sendForm,
            errors,
            onImageChange,
            imagePreview,
            v$
        }
    }
}
</script>

<style scoped>

</style>
