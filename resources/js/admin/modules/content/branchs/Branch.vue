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
                <div class="col-12 col-md-4 col-lg-3">
                    <BranchForm/>
                </div>
                <div class="col-12 col-md-8 col-lg-9">
                    <BranchTable/>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import BranchForm from "./components/BranchForm";
import BranchTable from "./components/BranchTable";

export default {
    name: "Branch",
    components: {BranchForm, BranchTable},
}
</script>

<style scoped>

</style>
