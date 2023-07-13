<template>
    <form>
        <div class="mb-4">
            <label for="product_name" class="form-label">Nombre</label>
            <input type="text" placeholder="Ingresa nombre" class="form-control" id="category_name"/>
        </div>
        <div class="mb-4">
            <label for="product_slug" class="form-label">Slug</label>
            <input type="text" placeholder="/ejemplo" class="form-control" id="category_slug"/>
        </div>
        <div class="mb-4">
            <label class="form-label">Categoria padre</label>
            <select class="form-select" name="category_parent">
                <option value="" selected></option>
                <option>Esta es una categoria padre</option>
                <option>Cajas de Plastico</option>
                <option>Cajas de Carton</option>
                <option>Papeleria</option>
                <option>Hogar</option>
            </select>
        </div>
        <div class="mb-4">
            <label class="form-label">Descripción</label>
            <textarea placeholder="Escribe una descripción para esta categoria" class="form-control"
                      name="category_description"></textarea>
        </div>
        <div class="mb-4">
            <label for="product_slug" class="form-label">Imagen</label>
            <input type="file" class="form-control" id="category_img"/>
        </div>
        <div class="mb-4">
            <label class="form-label">Nivel de importancia</label>
            <select class="form-select" name="category_order">
                <option value="" selected></option>
                <option>1 (Muy Importante)</option>
                <option>2 (Importante)</option>
                <option>3 (Normal)</option>
                <option>4 (Baja)</option>
            </select>
        </div>
        <div class="form-check mb-4">
            <input class="form-check-input" type="checkbox" value="1"/>
            <label for="product_status" class="form-label">Habilitado</label>
        </div>
        <div class="d-grid">
            <button class="btn btn-primary">Crear categoria</button>
        </div>
    </form>
</template>

<script>
export default {
    name: "CategoryForm"
}
</script>

<style scoped>

</style>
