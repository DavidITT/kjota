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
                                            <li><a href="{{  route('category.show', ['category' => 'Cajas de Linea']) }}">Cajas de linea</a></li>
                                            <li><a href="{{  route('category.show', ['category' => 'Cajas Delivery']) }}">Cajas delivery</a></li>
                                            <li><a href="{{  route('category.show', ['category' => 'Cajas de Plastico']) }}">Cajas de plastico</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{  route('category.show', ['category' => 'Carton Corrugado']) }}">Cartón corrugado</a></li>
                                    <li><a href="{{  route('category.show', ['category' => 'Esquineros']) }}">Esquineros</a></li>
                                    <li><a href="{{  route('category.show', ['category' => 'Peliculas Estirables']) }}">Peliculas estirables</a></li>
                                    <li><a href="{{  route('category.show', ['category' => 'Cintas Adhesivas']) }}">Cintas adhesivas</a></li>
                                    <li><a href="{{  route('category.show', ['category' => 'Papel Kraft']) }}">Papel Kraft</a></li>
                                    <li><a href="{{  route('category.show', ['category' => 'Cacahuate']) }}">Cacahuate</a></li>
                                    <li><a href="{{  route('category.show', ['category' => 'Aire Sellado']) }}">Aire Sellado</a></li>
                                    <li><a href="{{  route('category.show', ['category' => 'Archiveros']) }}">Archiveros</a></li>
                                    <li><a href="{{  route('category.show', ['category' => 'Hogar']) }}">Hogar</a></li>
                                    <li><a href="{{  route('category.show', ['category' => 'Oficina']) }}">Oficina</a></li>
                                    <li><a href="{{  route('category.show', ['category' => 'Despachador de Cinta']) }}">Despachador de cinta</a></li>
                                    <li><a href="{{  route('category.show', ['category' => 'Sobre Acojinado']) }}">Sobre acojinado</a></li>
                                    <li><a href="{{  route('category.show', ['category' => 'Papel Engomado']) }}">Pepel Engomado</a></li>
                                    <li><a href="{{  route('category.show', ['category' => 'Espuma de Polietileno']) }}">Espuma de polietileno</a></li>
                                    <li><a href="{{  route('category.show', ['category' => 'Etiquetas Adheribles']) }}">Etiquetas adheribles</a></li>
                                    <li><a href="{{  route('category.show', ['category' => 'Fleje']) }}">Fleje</a></li>
                                    <li><a href="{{  route('category.show', ['category' => 'Hojas de cartón']) }}">Hojas de cartón</a></li>
                                    <li><a href="{{  route('category.show', ['category' => 'Papeleria']) }}">Papeleria</a></li>
                                    <li><a href="{{  route('category.show', ['category' => 'Rafla']) }}">Rafla</a></li>
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
