<footer class="main">
    <!-- Subscribe Form -->
    <section class="newsletter p-20 text-white wow fadeIn animated text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-md-3 mb-lg-0">
                    <div class="row align-items-center">
                        <div class="col flex-horizontal-center">
                            <img class="icon-email" src="{{asset('assets/client/imgs/theme/icons/icon-email.svg')}}" alt="">
                            <h4 class="font-size-20 mb-0 ml-3 text-white">Registrate</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <!-- Subscribe Form -->
                    <form class="form-subcriber d-flex wow fadeIn animated">
                        <input type="email" class="form-control bg-white font-small" placeholder="Ingresa tu correo electrónico">
                        <button class="btn btn-suscribe text-white">Suscribirse</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End Subscribe Form -->

    <!-- Footer -->
    <section class="section-padding footer-mid">
        <div class="container pt-15 pb-20">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="widget-about font-md mb-md-5 mb-lg-0">
                        <div class="logo logo-width-1 wow fadeIn animated">
                            <a href="{{route('home')}}" class="text-center text-md-start"><img src="{{asset('assets/client/imgs/theme/logo.png')}}" alt="logo"></a>
                        </div>
                        <h5 class="mt-20 mb-10 fw-600 text-grey-4 wow fadeIn animated">Contacto</h5>
                        <p class="wow fadeIn animated">
                            <strong>Direccion: </strong>  Calz. de la Viga 1183, Militar Marte, Iztacalco, 08840 Ciudad de México, CDMX
                        </p>
                        <p class="wow fadeIn animated">
                            <strong>Telefono: </strong><a target="_blank" href="https://api.whatsapp.com/send?phone=5215574312004&amp;text=Hola,%20me%20gustar&iacute;a%20obtener%20m&aacute;s%20informaci&oacute;n">(+52) 1 55 7431 2004</a>
                        </p>
                        <div class="wow fadeIn animated d-flex flex-column">
                            <strong>Horario: </strong>
                            <ul class="pl-5">
                                <li>Lun - Vier (8:00 - 18:00).</li>
                                <li>Sab (9:00 - 14:00).</li>
                            </ul>
                        </div>
                        <h5 class="mb-10 mt-30 fw-600 text-grey-4 wow fadeIn animated">Siguenos</h5>
                        <div class="mobile-social-icon wow fadeIn animated mb-sm-5 mb-md-0">
                            <a href="https://www.facebook.com/bullet.envios/" target="_blank"><img src="{{asset('assets/client/imgs/theme/icons/icon-facebook.svg')}}" alt="facebook-icon"></a>
                            <a href="https://www.instagram.com/kjota.mx/" target="_blank"><img src="{{asset('assets/client/imgs/theme/icons/icon-instagram.svg')}}" alt="instagram-icon"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3">
                    <h5 class="widget-title wow fadeIn animated">Nosotros</h5>
                    <ul class="footer-list wow fadeIn animated mb-sm-5 mb-md-0">
                        <li><a href="{{route('about')}}">Acerca de nosotros</a></li>
                        <li><a href="#">Delivery Information</a></li>
                        <li><a href="#">Politicas de privacidad</a></li>
                        <li><a href="#">Terminos &amp; Condiciones</a></li>
                        <li><a href="{{route('contact')}}">Contacto</a></li>
                        <li><a href="#">Soporte</a></li>
                    </ul>
                </div>
                <div class="col-lg-2  col-md-3">
                    <h5 class="widget-title wow fadeIn animated">Mi Cuenta</h5>
                    <ul class="footer-list wow fadeIn animated">
                        <li><a href="{{route('login')}}">Iniciar Sesión</a></li>
                        <li><a href="{{route('register')}}">Registrarse</a></li>
                        <li><a href="#">Cerrar Sesión</a></li>
                        <li><a href="#">Ver Carrito</a></li>
                        <li><a href="#">Lista de deseos</a></li>
                        <li><a href="#">Seguir mi orden</a></li>
                        <li><a href="#">Ayuda</a></li>
                        <li><a href="#" class="mb-0 mb-5 mb-md-0">Mis Compras</a></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h5 class="widget-title wow fadeIn animated">Formas de pago</h5>
                    <div class="row">
                        <div class="col-md-4 col-lg-12 mt-md-3 mt-lg-0">
                            <p class="mb-20 wow fadeIn animated">Pagos seguros</p>
                            <img class="wow fadeIn animated" src="{{asset('assets/client/imgs/theme/payment-method.png')}}" alt="payment_methods">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->

    <!-- Info Copyright -->
    <div class="container pb-20 wow fadeIn animated">
        <div class="row">
            <div class="col-12 mb-20">
                <div class="footer-bottom"></div>
            </div>
            <div class="col text-center">
                <p class="float-md-left font-sm text-muted mb-0">&copy; {{ now()->year }}, <strong class="text-brand">Kjota</strong> - Cajas de Cartón </p>
            </div>
        </div>
    </div>
    <!-- End Info Copyright -->
</footer>
