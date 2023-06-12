<template>
    <div class="content-header">
        <div>
            <h2 class="content-title card-title">Productos</h2>
            <p>Lista de todos los productos dados de alta.</p>
        </div>
        <div>
            <a href="#" class="btn btn-light rounded font-md">Exportar</a>
            <a href="#" class="btn btn-light rounded  font-md">Importar</a>
            <a href="#" class="btn btn-primary btn-sm rounded">Nuevo</a>
        </div>
    </div>
    <div class="card mb-4">
        <header class="card-header">
            <div class="row align-items-center">
                <div class="col col-check flex-grow-0">
                    <div class="form-check ms-2">
                        <input class="form-check-input" type="checkbox" value="">
                    </div>
                </div>
                <div class="col-md-3 col-12 me-auto mb-md-0 mb-3">
                    <select class="form-select">
                        <option selected>Todas las categorias</option>
                        <option value="Cajas de Linea">Cajas de linea</option>
                        <option value="Cajas delivery">Cajas delivery</option>
                        <option value="Cajas de plastico">Cajas de plastico</option>
                        <option value="Cartón corrugado">Cartón corrugado</option>
                        <option value="Cartón corrugado">Cartón corrugado</option>
                        <option value="Peliculas estirables">Peliculas estirables</option>
                        <option value="Cintas adhesivas">Cintas adhesivas</option>
                        <option value="Cacahuate">Cacahuate</option>
                        <option value="Aire Sellado">Aire Sellado</option>
                        <option value="Archiveros">Archiveros</option>
                        <option value="Oficina">Oficina</option>
                        <option value="Hogar">Hogar</option>
                        <option value="Despachador de cinta">Despachador de cintar</option>
                        <option value="Sobre acojinado">Sobre acojinado</option>
                        <option value="Pepel Engomado">Pepel Engomado</option>
                        <option value="Espuma de polietileno">Espuma de polietileno</option>
                        <option value="Etiquetas adheribles">Etiquetas adheribles</option>
                        <option value="Fleje">Fleje</option>
                        <option value="Hojas de cartón">Hojas de cartón</option>
                        <option value="Papeleria">Papeleria</option>
                        <option value="Rafla">Rafla</option>
                    </select>
                </div>
                <div class="col-md-2 col-6">
                    <input type="date" value="02.05.2022" class="form-control">
                </div>
                <div class="col-md-2 col-6">
                    <select class="form-select">
                        <option selected>Estado</option>
                        <option>Activo</option>
                        <option>Desactivado</option>
                        <option>Eliminado</option>
                    </select>
                </div>
            </div>
        </header>
        <div class="card-body">
            <article class="itemlist">
                <div class="row align-items-center">
                    <div class="col col-check flex-grow-0">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox">
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4 col-8 flex-grow-1 col-name">
                        <a class="itemside" href="#">
                            <div class="left">
                                <img :src="'/assets/client/imgs/shop/products/arcon-1.jpg'" class="img-sm img-thumbnail" alt="Item">
                            </div>
                            <div class="info">
                                <h6 class="mb-0">Arcon 1</h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-sm-2 col-4 col-price"><span>$34.50</span></div>
                    <div class="col-lg-2 col-sm-2 col-4 col-status">
                        <span class="badge rounded-pill alert-success">Activo</span>
                    </div>
                    <div class="col-lg-1 col-sm-2 col-4 col-date">
                        <span>02.11.2022</span>
                    </div>
                    <div class="col-lg-2 col-sm-2 col-4 col-action text-end">
                        <a href="#" class="btn btn-sm font-sm rounded btn-brand">
                            <i class="material-icons md-edit"></i> Editar
                        </a>
                        <a href="#" class="btn btn-sm font-sm btn-light rounded">
                            <i class="material-icons md-delete_forever"></i> Eliminar
                        </a>
                    </div>
                </div> <!-- row .// -->
            </article>
            <article class="itemlist">
                <div class="row align-items-center">
                    <div class="col col-check flex-grow-0">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="">
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4 col-8 flex-grow-1 col-name">
                        <a class="itemside" href="#">
                            <div class="left">
                                <img :src="'/assets/client/imgs/shop/products/caja-pastel.jpg'" class="img-sm img-thumbnail" alt="Item">
                            </div>
                            <div class="info">
                                <h6 class="mb-0">Caja Pastel</h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-sm-2 col-4 col-price"><span>$990.99</span></div>
                    <div class="col-lg-2 col-sm-2 col-4 col-status">
                        <span class="badge rounded-pill alert-success">Activo</span>
                    </div>
                    <div class="col-lg-1 col-sm-2 col-4 col-date">
                        <span>02.11.2022</span>
                    </div>
                    <div class="col-lg-2 col-sm-2 col-4 col-action text-end">
                        <a href="#" class="btn btn-sm font-sm rounded btn-brand">
                            <i class="material-icons md-edit"></i> Editar
                        </a>
                        <a href="#" class="btn btn-sm font-sm btn-light rounded">
                            <i class="material-icons md-delete_forever"></i> Eliminar
                        </a>
                    </div>
                </div> <!-- row .// -->
            </article>
            <article class="itemlist">
                <div class="row align-items-center">
                    <div class="col col-check flex-grow-0">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="">
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4 col-8 flex-grow-1 col-name">
                        <a class="itemside" href="#">
                            <div class="left">
                                <img :src="'/assets/client/imgs/shop/products/kj-cerveza.jpg'" class="img-sm img-thumbnail" alt="Item">
                            </div>
                            <div class="info">
                                <h6 class="mb-0">Caja Cerveza</h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-sm-2 col-4 col-price"><span>$76.99</span></div>
                    <div class="col-lg-2 col-sm-2 col-4 col-status">
                        <span class="badge rounded-pill alert-warning">Archivado</span>
                    </div>
                    <div class="col-lg-1 col-sm-2 col-4 col-date">
                        <span>02.11.2022</span>
                    </div>
                    <div class="col-lg-2 col-sm-2 col-4 col-action text-end">
                        <a href="#" class="btn btn-sm font-sm rounded btn-brand">
                            <i class="material-icons md-edit"></i> Editar
                        </a>
                        <a href="#" class="btn btn-sm font-sm btn-light rounded">
                            <i class="material-icons md-delete_forever"></i> Eliminar
                        </a>
                    </div>
                </div> <!-- row .// -->
            </article>
            <article class="itemlist">
                <div class="row align-items-center">
                    <div class="col col-check flex-grow-0">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="">
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4 col-8 flex-grow-1 col-name">
                        <a class="itemside" href="#">
                            <div class="left">
                                <img :src="'/assets/client/imgs/shop/products/kj-lonchera.jpg'" class="img-sm img-thumbnail" alt="Item">
                            </div>
                            <div class="info">
                                <h6 class="mb-0">Caja Lonchera</h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-sm-2 col-4 col-price"><span>$18.00</span></div>
                    <div class="col-lg-2 col-sm-2 col-4 col-status">
                        <span class="badge rounded-pill alert-success">Activo</span>
                    </div>
                    <div class="col-lg-1 col-sm-2 col-4 col-date">
                        <span>02.11.2022</span>
                    </div>
                    <div class="col-lg-2 col-sm-2 col-4 col-action text-end">
                        <a href="#" class="btn btn-sm font-sm rounded btn-brand">
                            <i class="material-icons md-edit"></i> Editar
                        </a>
                        <a href="#" class="btn btn-sm font-sm btn-light rounded">
                            <i class="material-icons md-delete_forever"></i> Eliminar
                        </a>
                    </div>
                </div> <!-- row .// -->
            </article>
            <article class="itemlist">
                <div class="row align-items-center">
                    <div class="col col-check flex-grow-0">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="">
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4 col-8 flex-grow-1 col-name">
                        <a class="itemside" href="#">
                            <div class="left">
                                <img :src="'/assets/client/imgs/shop/products/kr.2.jpg'" class="img-sm img-thumbnail" alt="Item">
                            </div>
                            <div class="info">
                                <h6 class="mb-0">KR.2</h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-sm-2 col-4 col-price"><span>$76.99</span></div>
                    <div class="col-lg-2 col-sm-2 col-4 col-status">
                        <span class="badge rounded-pill alert-danger">Desactivado</span>
                    </div>
                    <div class="col-lg-1 col-sm-2 col-4 col-date">
                        <span>02.11.2022</span>
                    </div>
                    <div class="col-lg-2 col-sm-2 col-4 col-action text-end">
                        <a href="#" class="btn btn-sm font-sm rounded btn-brand">
                            <i class="material-icons md-edit"></i> Editar
                        </a>
                        <a href="#" class="btn btn-sm font-sm btn-light rounded">
                            <i class="material-icons md-delete_forever"></i> Eliminar
                        </a>
                    </div>
                </div> <!-- row .// -->
            </article>
            <article class="itemlist">
                <div class="row align-items-center">
                    <div class="col col-check flex-grow-0">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="">
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4 col-8 flex-grow-1 col-name">
                        <a class="itemside" href="#">
                            <div class="left">
                                <img :src="'/assets/client/imgs/shop/products/ks-4-1.jpg'" class="img-sm img-thumbnail" alt="Item">
                            </div>
                            <div class="info">
                                <h6 class="mb-0">KS4</h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-sm-2 col-4 col-price"><span>$18.00</span></div>
                    <div class="col-lg-2 col-sm-2 col-4 col-status">
                        <span class="badge rounded-pill alert-warning">Archivado</span>
                    </div>
                    <div class="col-lg-1 col-sm-2 col-4 col-date">
                        <span>02.11.2022</span>
                    </div>
                    <div class="col-lg-2 col-sm-2 col-4 col-action text-end">
                        <a href="#" class="btn btn-sm font-sm rounded btn-brand">
                            <i class="material-icons md-edit"></i> Editar
                        </a>
                        <a href="#" class="btn btn-sm font-sm btn-light rounded">
                            <i class="material-icons md-delete_forever"></i> Eliminar
                        </a>
                    </div>
                </div> <!-- row .// -->
            </article>
            <article class="itemlist">
                <div class="row align-items-center">
                    <div class="col col-check flex-grow-0">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="">
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4 col-8 flex-grow-1 col-name">
                        <a class="itemside" href="#">
                            <div class="left">
                                <img :src="'/assets/client/imgs/shop/products/lonchera-micro.jpg'" class="img-sm img-thumbnail" alt="Item">
                            </div>
                            <div class="info">
                                <h6 class="mb-0">Lonchera Micro</h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-sm-2 col-4 col-price"><span>$76.99</span></div>
                    <div class="col-lg-2 col-sm-2 col-4 col-status">
                        <span class="badge rounded-pill alert-success">Activo</span>
                    </div>
                    <div class="col-lg-1 col-sm-2 col-4 col-date">
                        <span>02.11.2022</span>
                    </div>
                    <div class="col-lg-2 col-sm-2 col-4 col-action text-end">
                        <a href="#" class="btn btn-sm font-sm rounded btn-brand">
                            <i class="material-icons md-edit"></i> Editar
                        </a>
                        <a href="#" class="btn btn-sm font-sm btn-light rounded">
                            <i class="material-icons md-delete_forever"></i> Eliminar
                        </a>
                    </div>
                </div> <!-- row .// -->
            </article>
            <article class="itemlist">
                <div class="row align-items-center">
                    <div class="col col-check flex-grow-0">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="">
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4 col-8 flex-grow-1 col-name">
                        <a class="itemside" href="#">
                            <div class="left">
                                <img :src="'/assets/client/imgs/shop/products/pizza-jum.jpg'" class="img-sm img-thumbnail" alt="Item">
                            </div>
                            <div class="info">
                                <h6 class="mb-0">Pizza Jumbo</h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-sm-2 col-4 col-price"><span>$18.00</span></div>
                    <div class="col-lg-2 col-sm-2 col-4 col-status">
                        <span class="badge rounded-pill alert-success">Activo</span>
                    </div>
                    <div class="col-lg-1 col-sm-2 col-4 col-date">
                        <span>02.11.2022</span>
                    </div>
                    <div class="col-lg-2 col-sm-2 col-4 col-action text-end">
                        <a href="#" class="btn btn-sm font-sm rounded btn-brand">
                            <i class="material-icons md-edit"></i> Editar
                        </a>
                        <a href="#" class="btn btn-sm font-sm btn-light rounded">
                            <i class="material-icons md-delete_forever"></i> Eliminar
                        </a>
                    </div>
                </div> <!-- row .// -->
            </article>
            <article class="itemlist">
                <div class="row align-items-center">
                    <div class="col col-check flex-grow-0">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="">
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4 col-8 flex-grow-1 col-name">
                        <a class="itemside" href="#">
                            <div class="left">
                                <img :src="'/assets/client/imgs/shop/products/sobre-1.jpg'" class="img-sm img-thumbnail" alt="Item">
                            </div>
                            <div class="info">
                                <h6 class="mb-0">Lace mini dress with faux leather</h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-sm-2 col-4 col-price"><span>$76.99</span></div>
                    <div class="col-lg-2 col-sm-2 col-4 col-status">
                        <span class="badge rounded-pill alert-success">Activo</span>
                    </div>
                    <div class="col-lg-1 col-sm-2 col-4 col-date">
                        <span>02.11.2022</span>
                    </div>
                    <div class="col-lg-2 col-sm-2 col-4 col-action text-end">
                        <a href="#" class="btn btn-sm font-sm rounded btn-brand">
                            <i class="material-icons md-edit"></i> Editar
                        </a>
                        <a href="#" class="btn btn-sm font-sm btn-light rounded">
                            <i class="material-icons md-delete_forever"></i> Eliminar
                        </a>
                    </div>
                </div> <!-- row .// -->
            </article>
            <article class="itemlist">
                <div class="row align-items-center">
                    <div class="col col-check flex-grow-0">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="">
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4 col-8 flex-grow-1 col-name">
                        <a class="itemside" href="#">
                            <div class="left">
                                <img :src="'/assets/client/imgs/shop/products/sobre-1.jpg'" class="img-sm img-thumbnail" alt="Item">
                            </div>
                            <div class="info">
                                <h6 class="mb-0">Lace mini dress with faux leather</h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-sm-2 col-4 col-price"><span>$76.99</span></div>
                    <div class="col-lg-2 col-sm-2 col-4 col-status">
                        <span class="badge rounded-pill alert-success">Activo</span>
                    </div>
                    <div class="col-lg-1 col-sm-2 col-4 col-date">
                        <span>02.11.2022</span>
                    </div>
                    <div class="col-lg-2 col-sm-2 col-4 col-action text-end">
                        <a href="#" class="btn btn-sm font-sm rounded btn-brand">
                            <i class="material-icons md-edit"></i> Editar
                        </a>
                        <a href="#" class="btn btn-sm font-sm btn-light rounded">
                            <i class="material-icons md-delete_forever"></i> Eliminar
                        </a>
                    </div>
                </div> <!-- row .// -->
            </article>
        </div>
    </div>
    <div class="pagination-area mt-30 mb-50">
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-start">
                <li class="page-item active"><a class="page-link" href="#">01</a></li>
                <li class="page-item"><a class="page-link" href="#">02</a></li>
                <li class="page-item"><a class="page-link" href="#">03</a></li>
                <li class="page-item"><a class="page-link dot" href="#">...</a></li>
                <li class="page-item"><a class="page-link" href="#">16</a></li>
                <li class="page-item"><a class="page-link" href="#"><i class="material-icons md-chevron_right"></i></a>
                </li>
            </ul>
        </nav>
    </div>
</template>

<script>
export default {
    name: "ProductList",
    setup(){
        return {}
    }
}
</script>

<style scoped>

</style>
