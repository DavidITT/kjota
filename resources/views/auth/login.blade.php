@extends('client.template.main')

@section('content')

    <main class="main">
    <section class="pt-150 pb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 m-auto">
                    <div class="row">
                        <div class="col-lg-6">
                            <div
                                class="login_wrap widget-taber-content p-30 background-white border-radius-10 mb-md-5 mb-lg-0 mb-sm-5">
                                <div class="padding_eight_all bg-white">
                                    <div class="heading_s1">
                                        <h3 class="mb-30">Inicia Sesión</h3>
                                    </div>
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf

                                        <div class="form-group">
                                            <input type="text" name="email" id="email"
                                                   placeholder="Correo electrónico"
                                                   class="form-control @error('email') is-invalid @enderror"
                                                   value="{{ old('email') }}" required autocomplete="email"
                                                   autofocus>
                                        </div>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                                 <strong>{{ $message }}</strong>
                                         </span>
                                        @enderror
                                        <div class="form-group">
                                            <input type="password" name="password" placeholder="Contraseña"
                                                   class="@error('password') is-invalid @enderror" required
                                                   autocomplete="current-password">
                                        </div>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                        @if(\Illuminate\Support\Facades\Session::has('error'))
                                            <div class="text-danger my-3">
                                                {{\Illuminate\Support\Facades\Session::get('error')}}
                                            </div>
                                        @endif

                                        <div class="login_footer form-group">
                                            <div class="chek-form">
                                                <div class="custome-checkbox">
                                                    <input class="form-check-input" type="checkbox"
                                                           name="remember"
                                                           id="remember"
                                                           value="1"
                                                           {{ old('remember') ? 'checked' : '' }}>
                                                    <label class="form-check-label"
                                                           for="remember"><span>Recordarme</span></label>
                                                </div>
                                            </div>
                                            <a class="text-muted" href="{{ route('password.request') }}">¿Olvidaste tu
                                                contraseña?</a>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-md btn-fill-out btn-block hover-up"
                                                    name="login">Iniciar
                                            </button>
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
