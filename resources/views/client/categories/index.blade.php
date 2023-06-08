@extends('client.template.main')

@section('content')
    <main class="main">
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row flex-row-reverse">
                    <div class="col-lg-9">
                        <div>
                            <h3 class="text-brand mb-30"> {{ $category }}</h3>
                        </div>
                        <div class="shop-product-fillter">
                            <div class="totall-product">
                                <p> Encontramos <strong class="text-brand">688</strong> articulos para ti.</p>
                            </div>
                            <div class="sort-by-product-area">
                                <div class="sort-by-cover mr-10">
                                    <div class="sort-by-product-wrap">
                                        <div class="sort-by">
                                            <span><i class="fi-rs-apps"></i>Mostrar:</span>
                                        </div>
                                        <div class="sort-by-dropdown-wrap">
                                            <span> 50 <i class="fi-rs-angle-small-down"></i></span>
                                        </div>
                                    </div>
                                    <div class="sort-by-dropdown">
                                        <ul>
                                            <li><a class="active" href="#">50</a></li>
                                            <li><a href="#">100</a></li>
                                            <li><a href="#">150</a></li>
                                            <li><a href="#">200</a></li>
                                            <li><a href="#">All</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="sort-by-cover">
                                    <div class="sort-by-product-wrap">
                                        <div class="sort-by">
                                            <span><i class="fi-rs-apps-sort"></i>Ordenar por:</span>
                                        </div>
                                        <div class="sort-by-dropdown-wrap">
                                            <span>Lo mas reciente<i class="fi-rs-angle-small-down"></i></span>
                                        </div>
                                    </div>
                                    <div class="sort-by-dropdown">
                                        <ul>
                                            <li><a class="active" href="#">Lo mas reciente</a></li>
                                            <li><a href="#">Precio: Menor a Mayor</a></li>
                                            <li><a href="#">Precio: Mayor a Menor</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--grid products-->
                        <div class="row product-grid-3">
                            <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="shop-product-right.html">
                                                <img class="default-img"
                                                     src="{{asset('assets/client/imgs/shop/products/arcon-1.jpg')}}"
                                                     alt="">
                                                <img class="hover-img"
                                                     src="{{asset('assets/client/imgs/shop/products/arcon-1.jpg')}}"
                                                     alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Vista rapida" class="action-btn hover-up"
                                               data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                <i class="fi-rs-search"></i></a>
                                            <a aria-label="Agregar a lista de deseos" class="action-btn hover-up"
                                               href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                        </div>
                                        <!--                                        <div class="product-badges product-badges-position product-badges-mrg">
                                                                                    <span class="hot">Hot</span>
                                                                                </div>-->
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop-grid-right.html">Cajas de linea</a>
                                        </div>
                                        <h2><a href="shop-product-right.html">Arcon 1</a></h2>
                                        <div class="product-price">
                                            <span>$238.85 </span>
                                            <span class="old-price">$245.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Agregar al carrito" class="action-btn hover-up"
                                               href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="shop-product-right.html">
                                                <img class="default-img"
                                                     src="{{asset('assets/client/imgs/shop/products/caja-pastel.jpg')}}"
                                                     alt="">
                                                <img class="hover-img"
                                                     src="{{asset('assets/client/imgs/shop/products/caja-pastel.jpg')}}"
                                                     alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Vista rapida" class="action-btn hover-up"
                                               data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                <i class="fi-rs-search"></i></a>
                                            <a aria-label="Agregar a lista de deseos" class="action-btn hover-up"
                                               href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                        </div>
                                        <!--                                        <div class="product-badges product-badges-position product-badges-mrg">
                                                                                    <span class="hot">Hot</span>
                                                                                </div>-->
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop-grid-right.html">Cajas de linea</a>
                                        </div>
                                        <h2><a href="shop-product-right.html">Caja Pastel</a></h2>
                                        <div class="product-price">
                                            <span>$238.85 </span>
                                            <span class="old-price">$245.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Agregar al carrito" class="action-btn hover-up"
                                               href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="shop-product-right.html">
                                                <img class="default-img"
                                                     src="{{asset('assets/client/imgs/shop/products/kj-cerveza.jpg')}}"
                                                     alt="">
                                                <img class="hover-img"
                                                     src="{{asset('assets/client/imgs/shop/products/kj-cerveza.jpg')}}"
                                                     alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Vista rapida" class="action-btn hover-up"
                                               data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                <i class="fi-rs-search"></i></a>
                                            <a aria-label="Agregar a lista de deseos" class="action-btn hover-up"
                                               href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                        </div>
                                        <!--                                        <div class="product-badges product-badges-position product-badges-mrg">
                                                                                    <span class="hot">Hot</span>
                                                                                </div>-->
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop-grid-right.html">Cajas de linea</a>
                                        </div>
                                        <h2><a href="shop-product-right.html">KJ Cerveza</a></h2>
                                        <div class="product-price">
                                            <span>$238.85 </span>
                                            <span class="old-price">$245.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Agregar al carrito" class="action-btn hover-up"
                                               href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="shop-product-right.html">
                                                <img class="default-img"
                                                     src="{{asset('assets/client/imgs/shop/products/kj-lonchera.jpg')}}"
                                                     alt="">
                                                <img class="hover-img"
                                                     src="{{asset('assets/client/imgs/shop/products/kj-lonchera.jpg')}}"
                                                     alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Vista rapida" class="action-btn hover-up"
                                               data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                <i class="fi-rs-search"></i></a>
                                            <a aria-label="Agregar a lista de deseos" class="action-btn hover-up"
                                               href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                        </div>
                                        <!--                                        <div class="product-badges product-badges-position product-badges-mrg">
                                                                                    <span class="hot">Hot</span>
                                                                                </div>-->
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop-grid-right.html">Cajas de linea</a>
                                        </div>
                                        <h2><a href="shop-product-right.html">KJ Lonchera</a></h2>
                                        <div class="product-price">
                                            <span>$238.85 </span>
                                            <span class="old-price">$245.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Agregar al carrito" class="action-btn hover-up"
                                               href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="shop-product-right.html">
                                                <img class="default-img"
                                                     src="{{asset('assets/client/imgs/shop/products/kr.2.jpg')}}"
                                                     alt="">
                                                <img class="hover-img"
                                                     src="{{asset('assets/client/imgs/shop/products/kr.2.jpg')}}"
                                                     alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Vista rapida" class="action-btn hover-up"
                                               data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                <i class="fi-rs-search"></i></a>
                                            <a aria-label="Agregar a lista de deseos" class="action-btn hover-up"
                                               href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                        </div>
                                        <!--                                        <div class="product-badges product-badges-position product-badges-mrg">
                                                                                    <span class="hot">Hot</span>
                                                                                </div>-->
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop-grid-right.html">Cajas de linea</a>
                                        </div>
                                        <h2><a href="shop-product-right.html">KR.2</a></h2>
                                        <div class="product-price">
                                            <span>$238.85 </span>
                                            <span class="old-price">$245.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Agregar al carrito" class="action-btn hover-up"
                                               href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="shop-product-right.html">
                                                <img class="default-img"
                                                     src="{{asset('assets/client/imgs/shop/products/KS-4-1.jpg')}}"
                                                     alt="">
                                                <img class="hover-img"
                                                     src="{{asset('assets/client/imgs/shop/products/KS-4-1.jpg')}}"
                                                     alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Vista rapida" class="action-btn hover-up"
                                               data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                <i class="fi-rs-search"></i></a>
                                            <a aria-label="Agregar a lista de deseos" class="action-btn hover-up"
                                               href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                        </div>
                                        <!--                                        <div class="product-badges product-badges-position product-badges-mrg">
                                                                                    <span class="hot">Hot</span>
                                                                                </div>-->
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop-grid-right.html">Cajas de linea</a>
                                        </div>
                                        <h2><a href="shop-product-right.html">KS-4</a></h2>
                                        <div class="product-price">
                                            <span>$238.85 </span>
                                            <span class="old-price">$245.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Agregar al carrito" class="action-btn hover-up"
                                               href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="shop-product-right.html">
                                                <img class="default-img"
                                                     src="{{asset('assets/client/imgs/shop/products/ks-inj-14.jpg')}}"
                                                     alt="">
                                                <img class="hover-img"
                                                     src="{{asset('assets/client/imgs/shop/products/ks-inj-14.jpg')}}"
                                                     alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Vista rapida" class="action-btn hover-up"
                                               data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                <i class="fi-rs-search"></i></a>
                                            <a aria-label="Agregar a lista de deseos" class="action-btn hover-up"
                                               href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                        </div>
                                        <!--                                        <div class="product-badges product-badges-position product-badges-mrg">
                                                                                    <span class="hot">Hot</span>
                                                                                </div>-->
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop-grid-right.html">Cajas de linea</a>
                                        </div>
                                        <h2><a href="shop-product-right.html">KS-4 Injerto</a></h2>
                                        <div class="product-price">
                                            <span>$238.85 </span>
                                            <span class="old-price">$245.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Agregar al carrito" class="action-btn hover-up"
                                               href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="shop-product-right.html">
                                                <img class="default-img"
                                                     src="{{asset('assets/client/imgs/shop/products/pizza-jum.jpg')}}"
                                                     alt="">
                                                <img class="hover-img"
                                                     src="{{asset('assets/client/imgs/shop/products/pizza-jum.jpg')}}"
                                                     alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Vista rapida" class="action-btn hover-up"
                                               data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                <i class="fi-rs-search"></i></a>
                                            <a aria-label="Agregar a lista de deseos" class="action-btn hover-up"
                                               href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                        </div>
                                        <!--                                        <div class="product-badges product-badges-position product-badges-mrg">
                                                                                    <span class="hot">Hot</span>
                                                                                </div>-->
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop-grid-right.html">Cajas de linea</a>
                                        </div>
                                        <h2><a href="shop-product-right.html">Pizza Jumbo</a></h2>
                                        <div class="product-price">
                                            <span>$238.85 </span>
                                            <span class="old-price">$245.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Agregar al carrito" class="action-btn hover-up"
                                               href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="shop-product-right.html">
                                                <img class="default-img"
                                                     src="{{asset('assets/client/imgs/shop/products/sobre-1.jpg')}}"
                                                     alt="">
                                                <img class="hover-img"
                                                     src="{{asset('assets/client/imgs/shop/products/sobre-1.jpg')}}"
                                                     alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Vista rapida" class="action-btn hover-up"
                                               data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                <i class="fi-rs-search"></i></a>
                                            <a aria-label="Agregar a lista de deseos" class="action-btn hover-up"
                                               href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                        </div>
                                        <!--                                        <div class="product-badges product-badges-position product-badges-mrg">
                                                                                    <span class="hot">Hot</span>
                                                                                </div>-->
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop-grid-right.html">Cajas de linea</a>
                                        </div>
                                        <h2><a href="shop-product-right.html">Sobre 1</a></h2>
                                        <div class="product-price">
                                            <span>$238.85 </span>
                                            <span class="old-price">$245.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Agregar al carrito" class="action-btn hover-up"
                                               href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--pagination-->
                        <div class="pagination-area mt-15 mb-sm-5 mb-lg-0">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-end">
                                    <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                    <li class="page-item"><a class="page-link" href="#">02</a></li>
                                    <li class="page-item"><a class="page-link" href="#">03</a></li>
                                    <li class="page-item"><a class="page-link dot" href="#">...</a></li>
                                    <li class="page-item"><a class="page-link" href="#">16</a></li>
                                    <li class="page-item"><a class="page-link" href="#"><i
                                                class="fi-rs-angle-double-small-right"></i></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!--categories-->
                    <div class="col-lg-3 primary-sidebar sticky-sidebar">
                        <div class="widget-category mb-30">
                            <h5 class="section-title style-1 mb-30 wow fadeIn animated">Categorias</h5>
                            <ul class="categories">
                                <li><a href="{{  route('category.show', ['category' => 'cajas-de-linea']) }}">Cajas de linea</a></li>
                                <li><a href="shop-product-left.html">Cajas delivery</a></li>
                                <li><a href="shop-product-full.html">Cajas de plastico</a></li>
                                <li><a href="">Cartón corrugado</a></li>
                                <li><a href="">Esquineros</a></li>
                                <li><a href="">Peliculas estirables</a></li>
                                <li><a href="">Cintas adhesivas</a></li>
                                <li><a href="">Papel Kraft</a></li>
                                <li><a href="">Cacahuate</a></li>
                                <li><a href="">Aire Sellado</a></li>
                                <li><a href="">Archiveros</a></li>
                                <li><a href="">Hogar</a></li>
                                <li><a href="">Oficina</a></li>
                                <li><a href="">Despachador de cinta</a></li>
                                <li><a href="">Sobre acojinado</a></li>
                                <li><a href="">Pepel Engomado</a></li>
                                <li><a href="">Espuma de polietileno</a></li>
                                <li><a href="">Etiquetas adheribles</a></li>
                                <li><a href="">Fleje</a></li>
                                <li><a href="">Hojas de cartón</a></li>
                                <li><a href="">Papeleria</a></li>
                                <li><a href="">Rafla</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection