<template>
    <div v-if="loader"
         class="d-flex w-100 h-100 flex-row justify-content-center align-items-center">
        <div class="spinner-grow spinner-grow-sm mr-10" role="status"></div>
        <div class="spinner-grow spinner-grow-sm mr-10" role="status"></div>
        <div class="spinner-grow spinner-grow-sm" role="status"></div>
    </div>
    <div v-else>
        <div class="row mb-30 justify-content-end">
            <div class="col-4">
                <input type="text" class="form-control-sm form-control bg-white"
                       placeholder="Buscar sucursal" v-model="search">
            </div>
        </div>

        <div class="table-responsive" >
            <table class="table table-hover">
                <thead>
                <tr>
                    <!-- <th class="text-center"></th> -->
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Estado</th>
                    <th class="text-center">Acciones</th>
                </tr>
                </thead>
                <tbody>
                <tr class="text-center" v-if="searchBranch.length=== 0">
                    <td colspan="6">
                        <p>No hay ninguna sucursal</p>
                    </td>
                </tr>
                <BranchItem v-else v-for="branch in searchBranch" :key="branch.id" :branch="branch"/>
                </tbody>
            </table>

            <div v-if="searchBranch.length !== 0" class="pagination-area mt-15 mb-50">
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
    </div>
</template>

<script>

import {onMounted} from "vue";
import {useStore} from "vuex";
import useBranch from "../composables/useBranch";
import BranchItem from "./BranchItem";
import useSearch from "../composables/useSearch";


export default {
    name: "BranchTable",
    components: {BranchItem},
    setup() {
        const store = useStore()
        const {getBranches, links, loader} = useBranch()
        const {search, searchBranch} = useSearch()

        onMounted(() => {
            getBranches()
        })

        return {
            searchBranch,
            search,
            paginate: (url) => {
                store.commit('branches/setUrl', url)
                getBranches()
            },
            links,
            loader
        }

    }
}
</script>

<style scoped>

</style>
