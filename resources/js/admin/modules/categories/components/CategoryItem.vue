<template>
    <tr>
        <td>{{ category.id }}</td>
        <td><b>{{ category.name }}</b></td>
        <td>{{ category.description }}</td>
        <td>/{{ category.slug }}</td>
        <td v-if="!category.category">{{ category.priority }}</td>
        <td v-if="category.category">{{ category.category.name }}</td>
        <td class="text-end">
            <div class="dropdown">
                <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i
                    class="material-icons md-more_horiz"></i> </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Ver detalles</a>
                    <a class="dropdown-item" href="#">Editar</a>
                    <a class="dropdown-item text-danger" href="#">Eliminar</a>
                </div>
            </div>
        </td>
    </tr>
</template>

<script>
export default {
    name: "CategoryItem",
    props: {
        category: {
            type: Object,
            required: true
        }
    },
    setup(props) {
        return {
            category: props.category
        }
    }
}
</script>

<style scoped>

</style>
