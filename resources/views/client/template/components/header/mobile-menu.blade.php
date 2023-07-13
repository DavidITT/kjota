<div class="mobile-header-active mobile-header-wrapper-style">
    <div class="mobile-header-wrapper-inner">
        <div class="mobile-header-top">
            <div class="mobile-header-logo">
                <a href="{{route('home')}}"><img src="{{asset('assets/client/imgs/theme/logo.png')}}" alt="logo"></a>
            </div>
            <div class="mobile-menu-close close-style-wrap close-style-position-inherit">
                <button class="close-style search-close">
                    <i class="icon-top"></i>
                    <i class="icon-bottom"></i>
                </button>
            </div>
        </div>
        <div class="mobile-header-content-area">
            <div class="mobile-search search-style-3 mobile-header-border">
                <form action="#">
                    <input type="text" placeholder="Buscar…">
                    <button type="submit"><i class="fi-rs-search"></i></button>
                </form>
            </div>
            <div class="mobile-menu-wrap mobile-header-border">
                <!-- mobile menu start -->
                <nav>
                    <ul class="mobile-menu">
                        <li>
                            <a href="{{route('home')}}">Home</a>
                        </li>
                        <li>
                            <a href="{{route('about')}}">Nosotros</a>
                        </li>
                        <li class="menu-item-has-children"><span class="menu-expand"></span><a
                                href="{{  route('category.show', ['category' => 'cajas-de-linea']) }}">Categorias</a>
                            <ul class="dropdown">
                                @foreach($categories as $category)
                                    <li class="menu-item-has-children">
                                        <span class="menu-expand"></span>
                                        <a href="{{  route('category.show', ['category' => $category->slug]) }}">{{ $category->name  }}</a>
                                        @if(!$category->subCategories->isEmpty())
                                            <ul class="dropdown">
                                                @foreach($category->subCategories as $subcategory)
                                                    <li>
                                                        <a href="{{ route('category.show', ['category' => $subcategory->slug]) }}">{{ $subcategory->name }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        <li>
                            <a href="{{route('contact')}}">Contacto</a>
                        </li>
                        @auth
                            <li class="menu-item-has-children"><span class="menu-expand"></span><a
                                    href="{{ route('account') }}">Mi Cuenta</a>
                                <ul class="dropdown">
                                    <li><a href="{{ route('account', ['tab' => 'orders']) }}">Mis Ordenes</a></li>
                                    <li><a href="{{ route('account', ['tab' => 'tracking']) }}">Rastreo</a></li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </nav>
                <!-- mobile menu end -->
            </div>
            <div class="mobile-header-info-wrap mobile-header-border">

                <div class="single-mobile-header-info d-flex">
                    @auth
                        <form method="POST" action="{{route('logout')}}">
                            @csrf
                            <a href="{{route('logout')}}"
                               onclick="event.preventDefault(); this.closest('form').submit();">Cerrar Sesión</a>
                        </form>
                    @else
                        <a class="mr-5" href="{{route('login')}}">Iniciar Sesión </a> /
                        <a class="ml-5" href="{{route('register')}}"> Registrarse </a>
                    @endif
                </div>
                <div class="single-mobile-header-info">
                    <a target="_blank"
                       href="https://api.whatsapp.com/send?phone=5215574312004&amp;text=Hola,%20me%20gustar&iacute;a%20obtener%20m&aacute;s%20informaci&oacute;n">(+52)
                        1 55 7431 2004</a>
                </div>

            </div>
            <div class="mobile-social-icon">
                <h5 class="mb-15 text-grey-4">Siguenos</h5>
                <a href="https://www.facebook.com/bullet.envios/" target="_blank"><img
                        src="{{asset('assets/client/imgs/theme/icons/icon-facebook.svg')}}" alt="facebook-icon"></a>
                <a href="https://www.instagram.com/kjota.mx/" target="_blank"><img
                        src="{{asset('assets/client/imgs/theme/icons/icon-instagram.svg')}}" alt="instagram-icon"></a>
            </div>
        </div>
    </div>
</div>
