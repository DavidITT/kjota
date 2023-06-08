@extends('client.template.main')

@section('content')
    <main class="main">
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 mb-30">
                        <div class="product-detail accordion-detail">
                            <div class="row mb-50">
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="detail-gallery">
                                        <span class="zoom-icon"><i class="fi-rs-search"></i></span>
                                        <!-- MAIN SLIDES -->
                                        <div class="product-image-slider">
                                            <figure class="border-radius-10">
                                                <img src="{{ asset('assets/client/imgs/shop/products/arcon-1.jpg') }}" alt="product image">
                                            </figure>
                                            <figure class="border-radius-10">
                                                <img src="{{ asset('assets/client/imgs/shop/products/caja-pastel.jpg') }}" alt="product image">
                                            </figure>
                                            <figure class="border-radius-10">
                                                <img src="{{ asset('assets/client/imgs/shop/products/kj-cerveza.jpg') }}" alt="product image">
                                            </figure>
                                            <figure class="border-radius-10">
                                                <img src="{{ asset('assets/client/imgs/shop/products/kj-lonchera.jpg') }}" alt="product image">
                                            </figure>
                                            <figure class="border-radius-10">
                                                <img src="{{ asset('assets/client/imgs/shop/products/kr.2.jpg') }}" alt="product image">
                                            </figure>
                                            <figure class="border-radius-10">
                                                <img src="{{ asset('assets/client/imgs/shop/products/KS-4-1.jpg') }}" alt="product image">
                                            </figure>
                                            <figure class="border-radius-10">
                                                <img src="{{ asset('assets/client/imgs/shop/products/pizza-jum.jpg') }}" alt="product image">
                                            </figure>
                                        </div>
                                        <!-- THUMBNAILS -->
                                        <div class="slider-nav-thumbnails pl-15 pr-15">
                                            <div><img src="{{ asset('assets/client/imgs/shop/products/arcon-1.jpg') }}" alt="product image"></div>
                                            <div><img src="{{ asset('assets/client/imgs/shop/products/caja-pastel.jpg') }}" alt="product image"></div>
                                            <div><img src="{{ asset('assets/client/imgs/shop/products/kj-cerveza.jpg') }}" alt="product image"></div>
                                            <div><img src="{{ asset('assets/client/imgs/shop/products/kj-lonchera.jpg') }}" alt="product image"></div>
                                            <div><img src="{{ asset('assets/client/imgs/shop/products/kr.2.jpg') }}" alt="product image"></div>
                                            <div><img src="{{ asset('assets/client/imgs/shop/products/KS-4-1.jpg') }}" alt="product image"></div>
                                            <div><img src="{{ asset('assets/client/imgs/shop/products/pizza-jum.jpg') }}" alt="product image"></div>
                                        </div>
                                    </div>
                                    <!-- End Gallery -->
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <!-- Detail Info -->
                                    <div class="detail-info">
                                        <h2 class="title-detail">{{ $product }}</h2>
                                        <div class="product-detail-rating">
                                            <div class="pro-details-brand">
                                                <span> Categoria: <a href="shop-grid-right.html">Cajas Delivery</a></span>
                                            </div>
                                        </div>
                                        <div class="clearfix product-price-cover">
                                            <div class="product-price primary-color float-left">
                                                <ins><span class="text-brand">$120.00</span></ins>
                                                <ins><span class="old-price font-md ml-15">$200.00</span></ins>
                                                <span class="save-price  font-md color3 ml-15">25% Off</span>
                                            </div>
                                        </div>
                                        <div class="bt-1 border-color-1 mt-15 mb-15"></div>
                                        <div class="short-desc mb-30">
                                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam rem officia, corrupti reiciendis minima nisi modi, quasi, odio minus dolore impedit fuga eum eligendi? Officia doloremque facere quia. Voluptatum, accusantium!</p>
                                        </div>
                                        <div class="attr-detail attr-size">
                                            <strong class="mr-10">Medidas: </strong>
                                            <span>12 34 x 23 cm.</span>
                                        </div>
                                        <div class="bt-1 border-color-1 mt-30 mb-30"></div>
                                        <div class="detail-extralink">
                                            <div class="detail-qty border radius">
                                                <a href="#" class="qty-down"><i class="fi-rs-angle-small-down"></i></a>
                                                <span class="qty-val">1</span>
                                                <a href="#" class="qty-up"><i class="fi-rs-angle-small-up"></i></a>
                                            </div>
                                            <div class="product-extra-link2">
                                                <button type="submit" class="button button-add-to-cart">Agragar</button>
                                            </div>
                                        </div>
                                        <ul class="product-meta font-xs color-grey mt-50">
                                            <li class="mb-5">SKU: <a href="#">FWM15VKT</a></li>
                                            <li class="mb-5">Tags: <a href="#" rel="tag">Cloth</a>, <a href="#" rel="tag">Women</a>, <a href="#" rel="tag">Dress</a> </li>
                                            <li>Availability:<span class="in-stock text-success ml-5">8 Items In Stock</span></li>
                                        </ul>
                                    </div>
                                    <!-- Detail Info -->
                                </div>
                            </div>
                            <div class="tab-style3">
                                <ul class="nav nav-tabs text-uppercase">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="Description-tab" data-bs-toggle="tab" href="#Description">Descripción</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="Additional-info-tab" data-bs-toggle="tab" href="#Additional-info">Informacion Adicional</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="Reviews-tab" data-bs-toggle="tab" href="#Reviews">Comentarios</a>
                                    </li>
                                </ul>
                                <div class="tab-content shop_info_tab entry-main-content">
                                    @include('client.product.components.product-description')
                                    @include('client.product.components.aditional-info')
                                    @include('client.product.components.reviews')
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 primary-sidebar sticky-sidebar">
                        <div class="widget-category mb-30">
                            <h5 class="section-title style-1 mb-30 wow fadeIn animated">Categorias</h5>
                            @include('client.general_components.categories-list')
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
