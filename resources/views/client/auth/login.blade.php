@extends('client.template.main')

@section('content')
    <main class="main">
        <section class="pt-150 pb-150">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 m-auto">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="login_wrap widget-taber-content p-30 background-white border-radius-10 mb-md-5 mb-lg-0 mb-sm-5">
                                    <div class="padding_eight_all bg-white">
                                        <div class="heading_s1">
                                            <h3 class="mb-30">Inicia Sesión</h3>
                                        </div>
                                        <form method="post">
                                            <div class="form-group">
                                                <input type="text" required="" name="email" placeholder="Correo electrónico">
                                            </div>
                                            <div class="form-group">
                                                <input required="" type="password" name="password" placeholder="Contraseña">
                                            </div>
                                            <div class="login_footer form-group">
                                                <div class="chek-form">
                                                    <div class="custome-checkbox">
                                                        <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox1" value="">
                                                        <label class="form-check-label" for="exampleCheckbox1"><span>Recordarme</span></label>
                                                    </div>
                                                </div>
                                                <a class="text-muted" href="{{route('forgot-password')}}">¿Olvidaste tu contraseña?</a>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-md btn-fill-out btn-block hover-up" name="login">Iniciar</button>
                                            </div>
                                        </form>
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
