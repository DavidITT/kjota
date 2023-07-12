<template>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" :class="{show:editBranch}" tabindex="-1"
         aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar Sucursal</h5>
                    <button type="button" class="btn-close" @click="handleModal({modal:'edit', status:false})"
                            aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <p><span class="text-bold">Instrucciones: </span>Edita la información que necesites cambiar de la sucursal,
                            para la dirección se recomienda pegar directamente una de google maps, si ya existe una
                            imagen previa, basta con seleccionar otro archivo.</p>
                    </div>
                    <form class="pl-40 pr-40">
                        <div class="mb-3">
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
                        <div class="mb-3">
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
                        <div class="mb-3">
                            <label for="branch_phone" class="form-label">Telefono</label>
                            <input type="number" placeholder=""
                                   :class="{'is-invalid': v$.phone.$dirty && v$.phone.$error}"
                                   class="form-control"
                                   id="branch_phone" v-model="formData.phone"/>
                            <div class="text-sm mt-2">
                                <p class="text-danger" v-for="error in v$.phone.$errors" :key="error.$uid">
                                    <span>{{ error.$message }}</span>
                                </p>
                            </div>
                        </div>
                        <div class="mb-3">
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
                        <div class="form-check mb-2 mb-3">
                            <input class="form-check-input" type="checkbox" value="1" id="branch_status"
                                   v-model="formData.status" :checked="formData.status === 1"/>
                            <label for="branch_status" class="form-label">Habilitado</label>
                        </div>
                        <div v-if="formData.img" class="d-flex flex-column mb-4 align-items-end w-100">
                            <p>{{imagePreview !== null ? 'Imagen nueva' : 'Imagen guardada de sucursal'}}</p>
                            <img v-if="imagePreview !== null" :src="imagePreview" class="rounded img-fluid" width="400" height="auto"
                                 alt="preview_image">
                            <img v-else :src="`/${formData.img}`" class="rounded img-fluid" width="400" height="auto"
                                 alt="branch_image">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default"
                            @click="handleModal({modal:'edit', status:false})"><i
                        class="fa fa-times"></i> Descartar
                    </button>
                    <button type="button" class="btn btn-sm btn-primary" @click="updateData">Guardar cambios</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import UseModal from "../composables/useModal";
import {nextTick, reactive, ref} from "vue";
import validations from "../../../contact/helpers/validations";
import useVuelidate from "@vuelidate/core/dist/index.mjs";
import useAlerts from "../../../../composables/useAlerts";
import useBranch from "../composables/useBranch";

export default {
    name: "EditBranch",
    setup() {
        const {store, getBranches} = useBranch()
        const {successMessage, errorMessage} = useAlerts()
        const {editBranch, handleModal} = UseModal()
        const loader = ref(false)
        const branch = store.getters['branches/branch']
        const imagePreview = ref(null)
        const rules = validations
        const errors = ref([])
        const formData = reactive({
            name: branch.name,
            address: branch.address,
            phone: branch.phone,
            img: branch.image.url,
            status: branch.status === 1,
        })

        const v$ = useVuelidate(rules, formData)

        const onImageChange = (event) => {
            const file = event.target.files[0];
            if (!file.type.startsWith('image/'))
            {
                formData.img = null
                errors.value = 'Este tipo de archivo no es permitido'
            }else{
                const reader = new FileReader()
                reader.onload = (e) => {
                    imagePreview.value = e.target.result
                }
                reader.readAsDataURL(file)

                formData.img = event.target.files[0];
                errors.value = []
            }

        }

        const updateData = async () => {
            const result = await v$.value.$validate();
            if (!result) return
            let data = new FormData();

            data.append('name', formData.name)
            data.append('address', formData.address)
            data.append('phone', formData.phone)
            data.append('img', formData.img)
            data.append('status', formData.status)

            await axios.post('branch/update/'+ branch.id, data, {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            }).then(async ({data, status}) => {
                if (status === 200) {
                    store.commit('branches/setUrl', null)
                    successMessage(data.message)
                    clearData()
                    await getBranches()
                    handleModal({modal:'edit', status:false})
                }
            }).catch(error => {
                errorMessage('Ocurrio un error al intentar actualizar la sucursal')
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

        return {
            formData,
            loader,
            //modal
            editBranch,
            handleModal,
            //update data
            updateData,
            v$, //vuelidate
            errors,
            imagePreview,
            onImageChange
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
