<template>
    <tr>
<!--        <td class="text-center">
            <div class="form-check"><input class="form-check-input" type="checkbox" value=""></div>
        </td>-->
        <td>{{ branch.id }}</td>
        <td><b>{{ branch.name }}</b></td>
        <td>
            <span class="badge rounded-pill" :class="branch.status === 1 ? 'alert-success' : 'alert-warning'">{{ branch.status === 1 ? 'Habilitado' : 'Deshabilitado' }}</span>
        </td>
        <td class="text-center">
            <div class="dropdown">
                <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm">
                    <i class="material-icons md-more_horiz"></i>
                </a>
                <div class="dropdown-menu">
                    <button class="dropdown-item" @click="handleModal({modal:'show', status: true, branch: branch})">Ver detalles</button>
                    <button class="dropdown-item" @click="handleModal({modal:'edit', status: true, branch: branch})">Editar</button>
                    <button class="dropdown-item text-danger" @click="deleteBranch(branch.id)">Eliminar</button>
                </div>
            </div>
        </td>
    </tr>

</template>

<script>
import useBranch from "../composables/useBranch";
import useModal from "../composables/useModal";

export default {
    name: "BranchItem",
    props: {
        branch: {
            type: Object,
            required: true
        }
    },
    setup(props) {
        const {handleModal} = useModal()
        const {deleteBranch} = useBranch()
        return {
            branch: props.branch, //prop
            deleteBranch,
            handleModal
        }
    }
}
</script>

<style scoped>

</style>
