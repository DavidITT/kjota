@extends('client.template.main')

@section('content')
    <main class="main">
        <section class="home-slider position-relative pt-25 pb-20">
            <div class="container">
                <div class="row mb-sm-3 mb-md-0">
                    <div class="col-lg-9 mb-4 mb-md-0">
                        @include('client.home.components.main-slider')
                    </div>
                    <div class="col-lg-3 d-none d-lg-block">
                        @include('client.home.components.promotionals')
                    </div>
                </div>
            </div>
        </section>
        <section class="popular-categories section-padding mt-15 mb-25">
            <div class="container wow fadeIn animated">
                <h3 class="section-title mb-20"><span>Categorias</span> Populares</h3>
                @include('client.home.components.popular-categories-carousel')
            </div>
        </section>

        <section class="section-padding mb-50">
            <div class="container wow fadeIn animated">
                <h3 class="section-title mb-20"><span>Nuevos</span> Productos</h3>
                @include('client.home.components.new-products-carousel')
            </div>
        </section>

        <section class="mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="banner-bg wow fadeIn animated" style="background-color: whitesmoke">
                            <div class="banner-content">
                                <h5 class="text-grey-4 mb-15">No te quedes sin tus cajas</h5>
                                <h2 class="fw-600">Aprovecha el <span class="text-brand">Hot Sale</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    @include('client.home.components.modals.quickview-product-modal')
@endsection


