<template>
    <form @submit.prevent="sendForm">
        <div class="mb-4">
            <label for="category_name" class="form-label">Nombre</label>
            <input v-model="formData.name" type="text" placeholder="Ingresa nombre" class="form-control"
                   id="category_name"/>
        </div>
        <div class="mb-4">
            <label class="form-label" for="category_parent">Categoria padre</label>
            <select v-model="formData.category" class="form-select" id="category_parent" name="category_parent">
                <option value="parent" selected>Esta es una categoria padre</option>
                <option v-for="parent in parentCategories" :key="parent.id" :value="parent.id">{{ parent.name }}</option>
            </select>
        </div>
        <div class="mb-4">
            <label class="form-label" for="category_description">Descripción</label>
            <textarea v-model="formData.description" placeholder="Escribe una descripción para esta categoria"
                      class="form-control"
                      name="category_description" id="category_description"></textarea>
        </div>
        <div class="mb-4">
            <label for="category_img" class="form-label">Imagen</label>
            <input type="file" class="form-control"
                   accept="image/x-png,image/jpg,image/jpeg"
                   id="category_img" @change="onImageChange"/>
        </div>
        <div v-if="imagePreview" class="d-flex flex-column mb-4 align-items-end w-100">
            <p class="float-left">Imagen previa</p>
            <img :src="imagePreview" class="rounded img-fluid" width="100" height="auto" alt="...">
        </div>
        <div class="mb-4" v-if="showPopular">
            <label class="form-label" for="category_priority">Prioridad</label>
            <select v-model="formData.priority" class="form-select" id="category_priority" name="category_priority">
                <option value="1">1 (Baja)</option>
                <option value="2">2 (Poco Importante)</option>
                <option value="3">3 (Normal)</option>
                <option value="4">4 (Importante)</option>
                <option value="5">5 (Muy Importante)</option>
            </select>
        </div>
        <div class="d-flex flex-row flex-wrap justify-content-between">
            <div class="form-check mb-4" v-if="showPopular">
                <input v-model="formData.popular" class="form-check-input" id="popular_category" type="checkbox"
                       value="1"/>
                <label for="popular_category" class="form-label">Categoria Popular</label>
            </div>
            <div class="form-check mb-4">
                <input v-model="formData.status" class="form-check-input" id="category_status" type="checkbox"
                       value="1"/>
                <label for="category_status" class="form-label">Habilitado</label>
            </div>
        </div>

        <div class="d-grid">
            <button class="btn btn-primary" type="submit">Crear categoria</button>
        </div>
    </form>
</template>

<script>
import {onMounted, reactive, ref, watch} from "vue";
import useCategory from "../composables/useCategory";
import useAlerts from "../../../composables/useAlerts";

export default {
    name: "CategoryForm",
    setup() {
        const {getCategories, store} = useCategory()
        const {successMessage, errorMessage} = useAlerts()

        const formData = reactive({
            name: '',
            category: null,
            description: '',
            img: '',
            priority: null,
            popular: 0,
            status: 0,
        })
        const parentCategories = ref({})
        const showPopular = ref(false)
        const imagePreview = ref(false)
        const errors = ref([])

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
            /*const result = await v$.value.$validate();
            if (!result) return*/
            let data = new FormData();

            data.append('name', formData.name)
            data.append('description', formData.description)
            data.append('priority', formData.priority)
            data.append('popular', formData.popular)
            data.append('parent_id', formData.category)
            data.append('img', formData.img)

            await axios.post('category/create', data, {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            }).then(async ({data, status}) => {
                if (status === 200) {
                    store.commit('categories/setUrl', null)
                    successMessage(data.message)
                    /*clearData()*/
                    await getCategories()
                }
            }).catch(error => {
                errorMessage('Ocurrio un error al intentar crear la sucursal')
            })
        }

        const getParentCategories = async () => {
            await axios.get('category/get_parent_categories')
                .then(async ({data, status}) => {
                    if (status === 200) {
                        parentCategories.value = data
                    }
                }).catch(error => {
                    errorMessage('Ocurrio un error al intentar obtener las categorias padre')
                })
        }

        watch(formData, (newValue) => {
            showPopular.value = formData.category === 'parent';
        }, {deep: true})

        onMounted(() => {
            getParentCategories()
        })

        return {
            showPopular,
            parentCategories,
            onImageChange,
            imagePreview,
            formData,
            sendForm,
        }
    }
}
</script>

<style scoped>

</style>
