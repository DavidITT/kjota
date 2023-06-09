<div class="header-middle header-middle-ptb-1 d-none d-lg-block">
    <div class="container">
        <div class="header-wrap">
            <div class="logo logo-width-1">
                <a href="{{route('home')}}"><img src="{{asset('assets/client/imgs/theme/logo.png')}}" alt="logo"></a>
            </div>
            <div class="header-right">
                <div class="search-style-2">
                    <form action="#">
                        <select class="select-active">
                            <option>Todas</option>
                            <option>Cajas delivery</option>
                            <option>Cajas de linea</option>
                            <option>Cajas de plastico</option>
                            <option>Cartón corrugado</option>
                            <option>Esquineros</option>
                            <option>Peliculas estirables</option>
                            <option>Cintas adhesivas</option>
                            <option>Papel Kraft</option>
                            <option>Cacahuate</option>
                            <option>Aire Sellado</option>
                            <option>Archiveros</option>
                            <option>Hogar</option>
                            <option>Oficina</option>
                            <option>Despachador de cinta</option>
                            <option>Sobre acojinado</option>
                            <option>Pepel Engomado</option>
                            <option>Espuma de polietileno</option>
                            <option>Etiquetas adheribles</option>
                            <option>Fleje</option>
                            <option>Hojas de cartón</option>
                            <option>Papeleria</option>
                            <option>Rafla</option>
                        </select>
                        <input type="text" placeholder="Buscar...">
                    </form>
                </div>
                <div class="header-action-right">
                    <div class="header-action-2">
                        @include('client.general_components.shopping-cart-modal')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
