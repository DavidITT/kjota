<div class="header-bottom sticky-bar">
    <div class="container">
        <div class="header-wrap header-space-between position-relative  main-nav">
            <div class="logo logo-width-1 d-block d-lg-none">
                <a href="{{route('home')}}"><img src="{{ asset('assets/client/imgs/theme/logo.png') }}" alt="logo"></a>
            </div>
            <div class="header-nav d-none d-lg-flex">
                <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block">
                    <nav>
                        <ul>
                            <li>
                                <a class="active" href="{{route('home')}}">Home</a>
                            </li>
                            <li>
                                <a href="{{route('about')}}">Nosotros</a>
                            </li>
                            <li><a href="shop-grid-right.html">Categorias <i class="fi-rs-angle-down"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="#">Cajas<i class="fi-rs-angle-right"></i></a>
                                        <ul class="level-menu">
                                            <li><a href="shop-product-right.html">Cajas de linea</a></li>
                                            <li><a href="shop-product-left.html">Cajas delivery</a></li>
                                            <li><a href="shop-product-full.html">Cajas de plastico</a></li>
                                        </ul>
                                    </li>
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
                            </li>
                            <li>
                                <a href="{{route('contact')}}">Contacto</a>
                            </li>
                            <li>
                                <a href="{{route('account')}}">Mi Cuenta</a>
                            </li>
                            <li>
                                <a href="{{ route('account', ['tab' => 'tracking']) }}">Seguimiento</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="header-action-right d-block d-lg-none">
                <div class="header-action-2">
                    @include('client.shopping-cart.shopping-cart-modal')
                    <div class="header-action-icon-2 d-block d-lg-none">
                        <div class="burger-icon burger-icon-white">
                            <span class="burger-icon-top"></span>
                            <span class="burger-icon-mid"></span>
                            <span class="burger-icon-bottom"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
