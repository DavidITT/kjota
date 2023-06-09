<aside class="navbar-aside" id="offcanvas_aside">
    <div class="aside-top">
        <a href="{{route('admin.dashboard')}}" class="brand-wrap">
            <img src="{{ asset('assets/client/imgs/theme/logo.png')}}" class="logo" alt="Kjota Logo">
        </a>
        <div>
            <button class="btn btn-icon btn-aside-minimize"> <i class="text-muted material-icons md-menu_open"></i> </button>
        </div>
    </div>
    <nav>
        <ul class="menu-aside">
            @can('admin.dashboard.index')
            <li class="{{ Route::is('admin.dashboard') ? 'menu-item active' : 'menu-item ' }}">
                <a class="menu-link" href="{{route('admin.dashboard')}}"> <i class="icon material-icons md-home"></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            @endcan
            <li class="{{ Route::is('admin.products.index') || Route::is('admin.categories.index') ? 'menu-item has-submenu active' : 'menu-item has-submenu' }}">
                <a class="menu-link" href="#"> <i class="icon material-icons md-shopping_bag"></i>
                    <span class="text">Productos</span>
                </a>
                <div class="submenu">
                    <a href="{{route('admin.products.index')}}" class="{{Route::is('admin.products.index') ? 'active active-sub' : '' }}">Lista de Productos</a>
                    <a href="{{route('admin.categories.index')}}" class="{{Route::is('admin.categories.index') ? 'active active-sub' : '' }}">Categorias</a>
                </div>
            </li>
            <li class="{{ Route::is('admin.orders.index') ? 'menu-item has-submenu active' : 'menu-item has-submenu' }}">
                <a class="menu-link" href="#"><i class="icon material-icons md-shopping_cart"></i>
                    <span class="text">Ordenes</span>
                </a>
                <div class="submenu">
                    <a href="{{route('admin.orders.index')}}" class="{{Route::is('admin.orders.index') ? 'active active-sub' : '' }}">Lista de ordenes</a>
                    <a href="page-invoice.html">Factura</a>
                </div>
            </li>
            <li class="{{ Route::is('admin.sales.index') ? 'menu-item active' : 'menu-item' }}" >
                <a class="menu-link" href="{{route('admin.sales.index')}}"> <i class="icon material-icons md-store"></i>
                    <span class="text">Ventas</span>
                </a>
            </li>
            <li class="menu-item has-submenu">
                <a class="menu-link" href="page-form-product-1.html"> <i class="icon material-icons md-add_box"></i>
                    <span class="text">Add product</span>
                </a>
                <div class="submenu">
                    <a href="page-form-product-1.html">Add product 1</a>
                    <a href="page-form-product-2.html">Add product 2</a>
                    <a href="page-form-product-3.html">Add product 3</a>
                    <a href="page-form-product-4.html">Add product 4</a>
                </div>
            </li>
            <li class="menu-item has-submenu">
                <a class="menu-link" href="page-transactions-1.html"> <i class="icon material-icons md-monetization_on"></i>
                    <span class="text">Transactions</span>
                </a>
                <div class="submenu">
                    <a href="page-transactions-1.html">Transaction 1</a>
                    <a href="page-transactions-2.html">Transaction 2</a>
                    <a href="page-transactions-details.html">Transaction Details</a>
                </div>
            </li>
            <li class="menu-item has-submenu">
                <a class="menu-link" href="#"> <i class="icon material-icons md-person"></i>
                    <span class="text">Account</span>
                </a>
                <div class="submenu">
                    <a href="page-account-login.html">User login</a>
                    <a href="page-account-register.html">User registration</a>
                    <a href="page-error-404.html">Error 404</a>
                </div>
            </li>
            <li class="menu-item">
                <a class="menu-link" href="page-reviews.html"> <i class="icon material-icons md-comment"></i>
                    <span class="text">Reviews</span>
                </a>
            </li>
            <li class="menu-item">
                <a class="menu-link" href="page-brands.html"> <i class="icon material-icons md-stars"></i>
                    <span class="text">Brands</span> </a>
            </li>
            <li class="menu-item">
                <a class="menu-link" disabled href="#"> <i class="icon material-icons md-pie_chart"></i>
                    <span class="text">Statistics</span>
                </a>
            </li>
                <li class="{{ Route::is('admin.branchs.index')  ? 'menu-item has-submenu active' : 'menu-item has-submenu' }}">
                    <a class="menu-link" href="#"> <i class="icon material-icons md-branding_watermark"></i>
                        <span class="text">Contenido</span>
                    </a>
                    <div class="submenu">
                        <a href="{{route('admin.branchs.index')}}" class="{{Route::is('admin.branchs.index') ? 'active active-sub' : '' }}">Sucursales</a>
                        <a href="page-account-register.html">Banners</a>
                    </div>
                </li>
            <li class="{{ Route::is('admin.contact.index') ? 'menu-item active' : 'menu-item' }}">
                <a class="menu-link" href="{{route('admin.contact.index')}}"> <i class="icon material-icons md-contact_mail"></i>
                    <span class="text">Contacto</span>
                </a>
            </li>
        </ul>
        <hr>
        <ul class="menu-aside">
            <li class="menu-item has-submenu">
                <a class="menu-link" href="#"> <i class="icon material-icons md-settings"></i>
                    <span class="text">Settings</span>
                </a>
                <div class="submenu">
                    <a href="page-settings-1.html">Setting sample 1</a>
                    <a href="page-settings-2.html">Setting sample 2</a>
                </div>
            </li>
            <li class="menu-item">
                <a class="menu-link" href="{{ route('home') }}"> <i class="icon material-icons md-local_offer"></i>
                    <span class="text"> Pagina principal </span>
                </a>
            </li>
        </ul>
        <br>
        <br>
    </nav>
</aside>
