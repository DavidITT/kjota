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
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Nombre(s)" value="{{ old('name') }}" autocomplete="name" autofocus>

                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control @error('lastname') is-invalid @enderror" id="lastname" name="lastname" placeholder="Apellido(s)" value="{{ old('lastname') }}">
                                            @error('lastname')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="number" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" placeholder="Telefono" value="{{ old('phone') }}">
                                            @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Correo electrónico" value="{{ old('email') }}" autocomplete="email">
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Contraseña" autocomplete="new-password">
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  placeholder="Confirma contraseña" autocomplete="new-password">
                                        </div>
                                        <div class="login_footer form-group">
                                            <div class="chek-form">
                                                <div class="custome-checkbox">
                                                    <input class="form-check-input" type="checkbox" name="terms" id="terms" value="1">
                                                    <label class="form-check-label" for="terms"><span>Acepto los términos y condiciones.</span></label>
                                                </div>
                                                @error('terms')
                                                <span>
                                                <strong class="text-danger">Es necesario que acepte los terminos y condiciones.</strong>
                                                </span>
                                                @enderror
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
