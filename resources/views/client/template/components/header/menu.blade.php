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
                            <li>
                                <a href="{{ route('category.show', ['category' => 'Cajas de Linea']) }}">Categorias <i class="fi-rs-angle-down"></i></a>
                                <ul class="sub-menu">
                                    @foreach($categories as $category)
                                        <li>
                                            <a href="{{route( 'category.show', ['category' => $category->slug]) }}">
                                                {{$category->name}}
                                                @if(!$category->subCategories->isEmpty())
                                                    <i class="fi-rs-angle-right"></i>
                                                @endif
                                            </a>
                                            @if(!$category->subCategories->isEmpty())
                                                <ul class="level-menu">
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
                                <li>
                                    <a href="{{route('account')}}">Mi Cuenta</a>
                                </li>
                                <li>
                                    <a href="{{ route('account', ['tab' => 'tracking']) }}">Seguimiento</a>
                                </li>
                            @endif
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="header-action-right d-block d-lg-none">
                <div class="header-action-2">
                    @include('client.general_components.shopping-cart-modal')
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
