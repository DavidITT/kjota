<template>
    <div class="content-header">
        <div class="mb-5 mb-md-0">
            <h2 class="content-title card-title">Categorias </h2>
            <p>Agrega, edita o elimina categorias para los diferentes productos.</p>
        </div>
        <div>
            <input type="text" placeholder="Buscar Categoria" class="form-control bg-white">
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-md-4 col-lg-3">
                    <form>
                        <div class="mb-4">
                            <label for="product_name" class="form-label">Nombre</label>
                            <input type="text" placeholder="Ingresa nombre" class="form-control" id="category_name" />
                        </div>
                        <div class="mb-4">
                            <label for="product_slug" class="form-label">Slug</label>
                            <input type="text" placeholder="/ejemplo" class="form-control" id="category_slug" />
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
                            <textarea placeholder="Escribe una descripción para esta categoria" class="form-control" name="category_description"></textarea>
                        </div>
                        <div class="mb-4">
                            <label for="product_slug" class="form-label">Imagen</label>
                            <input type="file" class="form-control" id="category_img" />
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
                            <input class="form-check-input" type="checkbox" value="1" />
                            <label for="product_status" class="form-label">Habilitado</label>
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-primary">Crear categoria</button>
                        </div>
                    </form>
                </div>
                <div class="col-12 col-md-8 col-lg-9">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th class="text-center">
                                </th>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Descripción</th>
                                <th>Slug</th>
                                <th>Orden</th>
                                <th class="text-end">Acciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="text-center">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" />
                                    </div>
                                </td>
                                <td>21</td>
                                <td><b>Men clothes</b></td>
                                <td>Men clothes</td>
                                <td>/men</td>
                                <td>1</td>
                                <td class="text-end">
                                    <div class="dropdown">
                                        <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Ver detalles</a>
                                            <a class="dropdown-item" href="#">Editar</a>
                                            <a class="dropdown-item text-danger" href="#">Eliminar</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" />
                                    </div>
                                </td>
                                <td>2</td>
                                <td><b>Women fashion</b></td>
                                <td>Fashions for Women</td>
                                <td>/women</td>
                                <td>2</td>
                                <td class="text-end">
                                    <div class="dropdown">
                                        <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Ver detalles</a>
                                            <a class="dropdown-item" href="#">Editar</a>
                                            <a class="dropdown-item text-danger" href="#">Eliminar</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" />
                                    </div>
                                </td>
                                <td>3</td>
                                <td><b>Kids clothes</b></td>
                                <td>Clothes for kids</td>
                                <td>/kids</td>
                                <td>3</td>
                                <td class="text-end">
                                    <div class="dropdown">
                                        <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Ver detalles</a>
                                            <a class="dropdown-item" href="#">Editar</a>
                                            <a class="dropdown-item text-danger" href="#">Eliminar</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center"><i class="material-icons md-subdirectory_arrow_right text-muted"></i></td>
                                <td>4</td>
                                <td><b>Hot Gifts</b></td>
                                <td>Hot Gifts</td>
                                <td>/gifts</td>
                                <td>4</td>
                                <td class="text-end">
                                    <div class="dropdown">
                                        <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Ver detalles</a>
                                            <a class="dropdown-item" href="#">Editar</a>
                                            <a class="dropdown-item text-danger" href="#">Eliminar</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center"><i class="material-icons md-subdirectory_arrow_right text-muted"></i></td>
                                <td>5</td>
                                <td><b>Electronics</b></td>
                                <td>Electronics</td>
                                <td>/electr</td>
                                <td>5</td>
                                <td class="text-end">
                                    <div class="dropdown">
                                        <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Ver detalles</a>
                                            <a class="dropdown-item" href="#">Editar</a>
                                            <a class="dropdown-item text-danger" href="#">Eliminar</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" />
                                    </div>
                                </td>
                                <td>6</td>
                                <td><b>Accessories</b></td>
                                <td>Accessories</td>
                                <td>/accessories</td>
                                <td>6</td>
                                <td class="text-end">
                                    <div class="dropdown">
                                        <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Ver detalles</a>
                                            <a class="dropdown-item" href="#">Editar</a>
                                            <a class="dropdown-item text-danger" href="#">Eliminar</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" />
                                    </div>
                                </td>
                                <td>7</td>
                                <td><b>Jewellery</b></td>
                                <td>Jewellery</td>
                                <td>/jewel</td>
                                <td>7</td>
                                <td class="text-end">
                                    <div class="dropdown">
                                        <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Ver detalles</a>
                                            <a class="dropdown-item" href="#">Editar</a>
                                            <a class="dropdown-item text-danger" href="#">Eliminar</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" />
                                    </div>
                                </td>
                                <td>8</td>
                                <td><b>Interiors</b></td>
                                <td>Interiors</td>
                                <td>/interior</td>
                                <td>8</td>
                                <td class="text-end">
                                    <div class="dropdown">
                                        <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Ver detalles</a>
                                            <a class="dropdown-item" href="#">Editar</a>
                                            <a class="dropdown-item text-danger" href="#">Eliminar</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center"><i class="material-icons md-subdirectory_arrow_right text-muted"></i></td>
                                <td>5</td>
                                <td><b>Electronics</b></td>
                                <td>Electronics</td>
                                <td>/electr</td>
                                <td>5</td>
                                <td class="text-end">
                                    <div class="dropdown">
                                        <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Ver detalles</a>
                                            <a class="dropdown-item" href="#">Editar</a>
                                            <a class="dropdown-item text-danger" href="#">Eliminar</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" />
                                    </div>
                                </td>
                                <td>6</td>
                                <td><b>Accessories</b></td>
                                <td>Accessories</td>
                                <td>/accessories</td>
                                <td>6</td>
                                <td class="text-end">
                                    <div class="dropdown">
                                        <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Ver detalles</a>
                                            <a class="dropdown-item" href="#">Editar</a>
                                            <a class="dropdown-item text-danger" href="#">Eliminar</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" />
                                    </div>
                                </td>
                                <td>7</td>
                                <td><b>Jewellery</b></td>
                                <td>Jewellery</td>
                                <td>/jewel</td>
                                <td>7</td>
                                <td class="text-end">
                                    <div class="dropdown">
                                        <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Ver detalles</a>
                                            <a class="dropdown-item" href="#">Editar</a>
                                            <a class="dropdown-item text-danger" href="#">Eliminar</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" />
                                    </div>
                                </td>
                                <td>8</td>
                                <td><b>Interiors</b></td>
                                <td>Interiors</td>
                                <td>/interior</td>
                                <td>8</td>
                                <td class="text-end">
                                    <div class="dropdown">
                                        <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Ver detalles</a>
                                            <a class="dropdown-item" href="#">Editar</a>
                                            <a class="dropdown-item text-danger" href="#">Eliminar</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "CategoryList",

    setup(){
        return {}
    }
}
</script>

<style scoped>

</style>
