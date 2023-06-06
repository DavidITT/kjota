

@extends('client.template.main')

@section('content')
    <main class="main">
        <section class="pt-150 pb-150">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 m-auto">
                        <div class="row align-content-end justify-content-end">
                            <div class="col-lg-6">
                                <div class="login_wrap widget-taber-content p-30 background-white border-radius-5">
                                    <div class="padding_eight_all bg-white">
                                        <div class="heading_s1">
                                            <h3 class="mb-30">Crea una cuenta</h3>
                                        </div>
                                        <p class="mb-50 font-sm">

                                            Sus datos personales se utilizarán para respaldar su experiencia en este sitio web, para administrar el acceso a su cuenta y para otros fines descritos en nuestra política de privacidad.
                                        </p>
                                        <form method="post">
                                            <div class="form-group">
                                                <input type="text" required="" name="name" placeholder="Nombre(s)">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" required="" name="lastname" placeholder="Apellido(s)">
                                            </div>
                                            <div class="form-group">
                                                <input type="number" required="" name="tel" placeholder="Telefono">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" required="" name="email" placeholder="Correo electrónico">
                                            </div>
                                            <div class="form-group">
                                                <input required="" type="password" name="password" placeholder="Contraseña">
                                            </div>
                                            <div class="form-group">
                                                <input required="" type="password" name="password" placeholder="Confirma contraseña">
                                            </div>
                                            <div class="login_footer form-group">
                                                <div class="chek-form">
                                                    <div class="custome-checkbox">
                                                        <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox12" value="">
                                                        <label class="form-check-label" for="exampleCheckbox12"><span>Acepto los términos y condiciones.</span></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-fill-out btn-block hover-up" name="login">Registrarse</button>
                                            </div>
                                        </form>
                                        <div class="divider-text-center mt-15 mb-15">
                                            <span> ó inicia sesión con </span>
                                        </div>
                                        <ul class="btn-login list_none text-center mb-15">
                                            <li><a href="#" class="btn btn-facebook hover-up mb-lg-0 mb-sm-4">Facebook</a></li>
                                            <li><a href="#" class="btn btn-google hover-up">Google</a></li>
                                        </ul>
                                        <div class="text-muted text-center">Ya tienes una cuenta? <a href="{{route('login')}}">Inicia Sesión</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
