<template>
    <div class="content-header">
        <div class="mb-5 mb-md-0">
            <h2 class="content-title card-title">Sucursales </h2>
            <p>Agrega, edita o elimina las sucursales que se le mostraran al cliente en la pagina.</p>
        </div>
        <div>
            <input type="text" placeholder="Buscar Sucursal" class="form-control bg-white">
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-md-5 col-lg-4 p-30">
                    <BranchForm/>
                </div>
                <div class="col-12 col-md-7 col-lg-8">
                    <BranchTable/>
                </div>
            </div>
        </div>
    </div>

    <!--Modals-->
    <ShowBranch v-if="showBranch"/>
    <EditBranch v-if="editBranch"/>

</template>

<script>
import BranchForm from "./components/BranchForm";
import BranchTable from "./components/BranchTable";
import ShowBranch from "./modals/ShowBranch";
import EditBranch from "./modals/EditBranch";
import useModal from "./composables/useModal";

export default {
    name: "Branch",
    components: {EditBranch, ShowBranch, BranchForm, BranchTable},
    setup(){
        const {showBranch, editBranch} = useModal()
        return{
            showBranch,
            editBranch
        }
    }
}
</script>

<style scoped>

</style>
