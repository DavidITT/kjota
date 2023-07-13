<template>
    <div v-if="loader"
         class="d-flex w-100 h-100 flex-row justify-content-center align-items-center">
        <div class="spinner-grow spinner-grow-sm mr-10" role="status"></div>
        <div class="spinner-grow spinner-grow-sm mr-10" role="status"></div>
        <div class="spinner-grow spinner-grow-sm" role="status"></div>
    </div>
    <div v-else class="table-responsive">
        <h5 class="text-center mb-10">{{ tab === 1 ? 'Categorias Padres' : 'Sub Categorias'}}</h5>
        <div class="row mb-10 justify-content-end mx-0">
            <div class="col-4">
                <input type="text" :placeholder="tab === 1 ? 'Buscar Categoria' : 'Buscar Sub Categoria'" class="form-control bg-white" v-model="search">
            </div>
        </div>
        <table class="table table-hover">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Slug</th>
                <th  v-if="tab === 1">Orden</th>
                <th v-if="tab === 2">Categoria Padre</th>
                <th class="text-end">Acciones</th>
            </tr>
            </thead>
            <tbody>
            <CategoryItem v-for="category in searchCategory" :key="category.id" :category="category" />
            </tbody>
        </table>

        <div class="pagination-area mt-15 mb-50">
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-start d-flex flex-wrap">
                    <li v-for="link in links" :key="link.label"
                        class="page-item mb-2"
                        :class="{ 'active': link.active, 'disabled': link.url === null}">
                        <button class="page-link"
                                @click="paginate(link.url)"
                                v-html="link.label">
                        </button>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</template>

<script>
import useCategory from "../composables/useCategory";
import CategoryItem from "./CategoryItem";
import useSearch from "../composables/useSearch";


export default {
    name: "CategoryTable",
    components: {CategoryItem},
    props:{
        tab:{
            type:Number,
            required:true
        }
    },
    setup(props) {
        const {getCategories, links, loader, store} = useCategory()
        const {search, searchCategory} = useSearch()
        return {
            tab: props.tab,
            searchCategory,
            paginate: (url) => {
                store.commit('categories/setUrl', url)
                getCategories()
            },
            links,
            loader,
            search
        }
    }
}
</script>

<style scoped>

</style>
