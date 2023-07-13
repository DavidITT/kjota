<template>
    <div class="content-header">
        <div class="mb-5 mb-md-0">
            <h2 class="content-title card-title">Categorias </h2>
            <p>Agrega, edita o elimina categorias para los diferentes productos.</p>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-md-4 col-lg-3">
                    <h6 class="text-center mb-10">Crear categoria</h6>
                    <CategoryForm/>
                </div>
                <div class="col-12 col-md-8 col-lg-9 mt-20 mt-md-0">
                    <div id="tabs" class="container">
                        <div class="tabs">
                            <a v-on:click="activeTab = 1" :class="[ activeTab === 1 ? 'active' : '' ]">Categorias</a>
                            <a v-on:click="activeTab = 2" :class="[ activeTab === 2 ? 'active' : '' ]">Sub Categorias</a>
                        </div>

                        <div class="content">
                            <div v-if="activeTab === 1" class="tabcontent">
                                <CategoryTable :tab="activeTab"/>
                            </div>
                            <div v-if="activeTab === 2" class="tabcontent">
                                <CategoryTable :tab="activeTab"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import {onMounted, ref, watch} from "vue";
import CategoryTable from "./components/CategoryTable";
import CategoryForm from "./components/CategoryForm";
import useCategory from "./composables/useCategory";

export default {
    name: "Category",
    components: {CategoryForm, CategoryTable},
    setup() {
        const activeTab = ref(1)
        const {getCategories, search, store} = useCategory()

        onMounted(() => {
            getCategories()
        })

        watch(activeTab, (newValue) => {
            store.commit('categories/setUrl', null)
            switch (newValue) {
                case 1:
                    getCategories('categories')
                    break;

                case 2:
                    getCategories('subcategories')
                    break;
            }
        })

        return {
            activeTab,
            search
        }
    }
}
</script>

<style scoped>
</style>

