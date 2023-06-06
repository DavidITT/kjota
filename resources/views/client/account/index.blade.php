@extends('client.template.main')

@section('content')
    <main class="main container">
        <section class="pt-75 pb-80">
            <div class="card">
                <div class="row mx-0">
                    <div class="col-md-3 px-0 border-end">
                        <div class="dashboard-menu">
                            <ul class="nav flex-column" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="dashboard-tab" data-bs-toggle="tab" href="#dashboard" role="tab" aria-controls="dashboard" aria-selected="false"><i class="fi-rs-settings-sliders mr-10"></i>General</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="orders-tab" data-bs-toggle="tab" href="#orders" role="tab" aria-controls="orders" aria-selected="false"><i class="fi-rs-shopping-bag mr-10"></i>Ordenes</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="track-orders-tab" data-bs-toggle="tab" href="#track-orders" role="tab" aria-controls="track-orders" aria-selected="false"><i class="fi-rs-shopping-cart-check mr-10"></i>Rastrea tu orden</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="page-login-register.html"><i class="fi-rs-sign-out mr-10"></i>Cerrar Sesión</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-9 mtb-40">
                        <hr class="d-block d-md-none mb-40">
                        <div class="tab-content dashboard-content">
                            <div class="tab-pane fade active show" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                                @include('client.account.sections.general')
                            </div>
                            <div class="tab-pane fade" id="orders" role="tabpanel" aria-labelledby="orders-tab">
                                @include('client.account.sections.orders')
                            </div>
                            <div class="tab-pane fade" id="track-orders" role="tabpanel" aria-labelledby="track-orders-tab">
                                @include('client.account.sections.tracking')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
