<template>
    <input type="text" class="form-control-sm form-control bg-white"
           placeholder="Buscar sucursal" v-model="search">
</template>

<script>


import useBranch from "../composables/useBranch";

export default {
    name: "SearchInput",

    setup() {
        const {search, searchBranch} = useBranch()
        return {
            search,
            searchBranch
        }
    }
}
</script>

<style scoped>

</style>
