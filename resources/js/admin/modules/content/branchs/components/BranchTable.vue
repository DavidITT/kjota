<template>
    <div v-if="loader"
         class="d-flex w-100 h-100 flex-row justify-content-center align-items-center">
        <div class="spinner-grow spinner-grow-sm mr-10" role="status"></div>
        <div class="spinner-grow spinner-grow-sm mr-10" role="status"></div>
        <div class="spinner-grow spinner-grow-sm" role="status"></div>
    </div>
    <div class="table-responsive" v-else>
        <table class="table table-hover">
            <thead>
            <tr>
                <th class="text-center"></th>
                <th>ID</th>
                <th>Nombre</th>
                <th>Direccion</th>
                <th>Telefono</th>
                <th class="text-center">Acciones</th>
            </tr>
            </thead>
            <tbody>
            <tr class="text-center" v-if="branches.length=== 0">
                <td colspan="6">
                    <p>No hay ninguna sucursal registrada aun</p>
                </td>
            </tr>
            <BranchItem v-else v-for="branch in branches" :key="branch.id" :branch="branch"/>
            </tbody>
        </table>

        <div v-if="branches.length !== 0" class="pagination-area mt-15 mb-50">
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

import {onMounted, reactive} from "vue";
import {useStore} from "vuex";
import useBranch from "../composables/useBranch";
import BranchItem from "./BranchItem";


export default {
    name: "BranchTable",
    components: {BranchItem},
    setup() {
        const store = useStore()
        const {getBranches, branches, links, loader} = useBranch()

        onMounted(() => {
            getBranches()
        })

        return {
            paginate: (url) => {
                store.commit('branches/setUrl', url)
                getBranches()
            },
            branches,
            links,
            loader
        }

    }
}
</script>

<style scoped>

</style>
