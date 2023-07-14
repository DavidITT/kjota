<template>
    <tr>
        <td>{{ category.id }}</td>
        <td><b>{{ category.name }}</b></td>
        <td>{{ shortDescription(category.description) }}</td>
        <td v-if="!category.parent_category">{{ category.priority }}</td>
        <td v-if="category.parent_category">{{ category.parent_category.name }}</td>
        <td>
            <span class="badge rounded-pill" :class="category.status === 1 ? 'alert-success' : 'alert-warning'">{{ category.status === 1 ? 'Habilitado' : 'Deshabilitado' }}</span>
        </td>
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
            category: props.category,
            //Short message
            shortDescription: (text) => (text.length > 20) ? text.substring(0, 20) + '...' : text,
        }
    }
}
</script>

<style scoped>

</style>
