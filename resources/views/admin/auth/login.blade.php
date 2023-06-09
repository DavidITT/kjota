@extends('admin.template.login-template')

@section('content')
    <main class="vh-100 d-flex align-content-center">
        <section class="content-main align-self-center">
            <div class="card mx-auto card-login">
                <div class="card-body">
                    <div class="row justify-content-center mb-20">
                        <div class="col-6">
                            <img src="{{ asset('assets/general/logo-2.jpg')}}" class="img-fluid rounded-circle" alt="">
                        </div>
                    </div>
                    <h4 class="card-title mb-4 text-center">Iniciar Sesión</h4>
                    <form>
                        <div class="mb-3">
                            <input class="form-control" placeholder="Correo electrónico" type="text" name="email">
                        </div>
                        <div class="mb-3">
                            <input class="form-control" placeholder="Contraseña" type="password" name="password">
                        </div>
                        <div class="mb-3">
                            <a href="#" class="float-end font-sm text-muted">¿Olvidaste tu contraseña?</a>
                            <label class="form-check">
                                <input type="checkbox" class="form-check-input" checked="">
                                <span class="form-check-label">Recordarme</span>
                            </label>
                        </div>
                        <div class="mb-4">
                            <button type="submit" class="btn btn-primary w-100"> Iniciar</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <footer class="main-footer text-center">
            <p class="font-xs">
                © Kjota - Cajas de Cartón <span class="font-xs mb-30"> Todos los derechos reservados.</span>
            </p>
        </footer>
    </main>
@endsection
