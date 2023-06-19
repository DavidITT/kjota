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
                                        <h3 class="mb-30">¿Olvidaste tu contraseña?</h3>
                                    </div>
                                    @if (session('status'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('status') }}
                                        </div>
                                    @endif
                                    <form method="POST" action="{{ route('password.email') }}">
                                        @csrf
                                        <p>
                                            Ingrese su dirección de correo electrónico y le enviaremos un correo
                                            electrónico con instrucciones para restablecer su contraseña.
                                        </p>
                                        <div class="form-group mb-4">
                                            <input type="email" name="email"
                                                   value="{{ old('email') }}" required autocomplete="email" autofocus
                                                   class="form-control @error('email') is-invalid @enderror"
                                                   placeholder="Correo electrónico">
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                   <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-md btn-fill-out btn-block hover-up"
                                                    name="login">Recuperar
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
