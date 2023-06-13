<template>
    <div class="content-header">
        <div>
            <h2 class="content-title card-title">Ventas</h2>
            <p>Listado de ventas.</p>
        </div>
        <div>
            <input type="text" placeholder="Buscar por ID" class="form-control bg-white">
        </div>
    </div>
    <div class="card mb-4">
        <header class="card-header">
            <div class="row gx-3">
                <div class="col-lg-4 col-md-6 me-auto">
                    <input type="text" placeholder="Buscar..." class="form-control">
                </div>
                <div class="col-lg-2 col-6 col-md-3">
                    <select class="form-select">
                        <option disabled selected>Estado</option>
                        <option>Exitoso</option>
                        <option>Cancelado</option>
                        <option>Mostrar todo</option>
                    </select>
                </div>
                <div class="col-lg-2 col-6 col-md-3">
                    <select class="form-select">
                        <option>Mostrar 20</option>
                        <option>Mostrar 30</option>
                        <option>Mostrar 40</option>
                    </select>
                </div>
            </div>
        </header>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover text-center">
                    <thead>
                    <tr>
                        <th>ID Pago</th>
                        <th scope="col">ID Orden</th>
                        <th scope="col">Total</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Fecha</th>
                        <th scope="col" class="text-end"> Acciones </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>0901</td>
                        <td><b>9484839</b></td>
                        <td>$9.00</td>
                        <td><span class="badge rounded-pill alert-warning">Pendiente</span></td>
                        <td>03.12.2022</td>
                        <td class="text-end">
                            <div class="dropdown">
                                <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Ver detalles</a>
                                    <a class="dropdown-item" href="#">Cambiar Estado</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>2323</td>
                        <td><b>12233</b></td>
                        <td>$46.61</td>
                        <td><span class="badge rounded-pill alert-warning">Pendiente</span></td>
                        <td>21.02.2022</td>
                        <td class="text-end">
                            <div class="dropdown">
                                <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Ver detalles</a>
                                    <a class="dropdown-item" href="#">Cambiar Estado</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>1233</td>
                        <td><b>8476732</b></td>
                        <td>$12.00</td>
                        <td><span class="badge rounded-pill alert-danger">Cancelado</span></td>
                        <td>03.07.2022</td>
                        <td class="text-end">
                            <div class="dropdown">
                                <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Ver detalles</a>
                                    <a class="dropdown-item" href="#">Cambiar Estado</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>1233</td>
                        <td><b>94832</b></td>
                        <td>$12.00</td>
                        <td><span class="badge rounded-pill alert-danger">Cancelado</span></td>
                        <td>03.07.2022</td>
                        <td class="text-end">
                            <div class="dropdown">
                                <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Ver detalles</a>
                                    <a class="dropdown-item" href="#">Cambiar Estado</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>2323</td>
                        <td><b>545455</b></td>
                        <td>$589.99</td>
                        <td><span class="badge rounded-pill alert-success">Exitoso</span></td>
                        <td>22.05.2022</td>
                        <td class="text-end">
                            <div class="dropdown">
                                <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Ver detalles</a>
                                    <a class="dropdown-item" href="#">Cambiar Estado</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>2112</td>
                        <td><b>094732</b></td>
                        <td>$16.58</td>
                        <td><span class="badge rounded-pill alert-success">Exitoso</span></td>
                        <td>23.04.2022</td>
                        <td class="text-end">
                            <div class="dropdown">
                                <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Ver detalles</a>
                                    <a class="dropdown-item" href="#">Cambiar Estado</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>7897</td>
                        <td><b>34321</b></td>
                        <td>$10.00</td>
                        <td><span class="badge rounded-pill alert-success">Exitoso</span></td>
                        <td>13.03.2022</td>
                        <td class="text-end">
                            <div class="dropdown">
                                <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Ver detalles</a>
                                    <a class="dropdown-item" href="#">Cambiar Estado</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>2323</td>
                        <td><b>6789634</b></td>
                        <td>$105.55</td>
                        <td><span class="badge rounded-pill alert-success">Exitoso</span></td>
                        <td>23.09.2019</td>
                        <td class="text-end">
                            <div class="dropdown">
                                <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Ver detalles</a>
                                    <a class="dropdown-item" href="#">Cambiar Estado</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>2324</td>
                        <td><b>678974</b></td>
                        <td>$710.68</td>
                        <td><span class="badge rounded-pill alert-success">Exitoso</span></td>
                        <td>28.04.2022</td>
                        <td class="text-end">
                            <div class="dropdown">
                                <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Ver detalles</a>
                                    <a class="dropdown-item" href="#">Cambiar Estado</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>2325</td>
                        <td><b>8677457</b></td>
                        <td>$710.68</td>
                        <td><span class="badge rounded-pill alert-success">Exitoso</span></td>
                        <td>23.03.2022</td>
                        <td class="text-end">
                            <div class="dropdown">
                                <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Ver detalles</a>
                                    <a class="dropdown-item" href="#">Cambiar Estado</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>2326</td>
                        <td><b>5678909</b></td>
                        <td>$767.50</td>
                        <td><span class="badge rounded-pill alert-success">Exitoso</span></td>
                        <td>28.04.2022</td>
                        <td class="text-end">
                            <div class="dropdown">
                                <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Ver detalles</a>
                                    <a class="dropdown-item" href="#">Cambiar Estado</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>2327</td>
                        <td><b>642446</b></td>
                        <td>$406.27</td>
                        <td><span class="badge rounded-pill alert-success">Exitoso</span></td>
                        <td>14.07.2022</td>
                        <td class="text-end">
                            <div class="dropdown">
                                <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Ver detalles</a>
                                    <a class="dropdown-item" href="#">Cambiar Estado</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>2328</td>
                        <td><b>848493</b></td>
                        <td>$601.13</td>
                        <td><span class="badge rounded-pill alert-success">Exitoso</span></td>
                        <td>18.03.2022</td>
                        <td class="text-end">
                            <div class="dropdown">
                                <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Ver detalles</a>
                                    <a class="dropdown-item" href="#">Cambiar Estado</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>2329</td>
                        <td><b>44344</b></td>
                        <td>$948.55</td>
                        <td><span class="badge rounded-pill alert-success">Exitoso</span></td>
                        <td>03.07.2022</td>
                        <td class="text-end">
                            <div class="dropdown">
                                <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Ver detalles</a>
                                    <a class="dropdown-item" href="#">Cambiar Estado</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="pagination-area mt-15 mb-50">
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-start">
                <li class="page-item active"><a class="page-link" href="#">01</a></li>
                <li class="page-item"><a class="page-link" href="#">02</a></li>
                <li class="page-item"><a class="page-link" href="#">03</a></li>
                <li class="page-item"><a class="page-link dot" href="#">...</a></li>
                <li class="page-item"><a class="page-link" href="#">16</a></li>
                <li class="page-item"><a class="page-link" href="#"><i class="material-icons md-chevron_right"></i></a></li>
            </ul>
        </nav>
    </div>
</template>

<script>
export default {
    name: "SalesList"
}
</script>

<style scoped>

</style>
