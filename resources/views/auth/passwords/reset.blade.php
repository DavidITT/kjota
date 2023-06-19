@extends('client.template.main')

@section('content')
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
                                        <h3 class="mb-30">Reestablecer contraseña</h3>
                                    </div>

                                    <form method="POST" action="{{ route('password.update') }}">
                                        @csrf
                                        <p class="mb-30">
                                            Ingrese y confirme su nueva contraseña.
                                        </p>

                                        <input type="hidden" name="token" value="{{ $token }}">

                                        <div class="form-group">
                                            <input type="email" id="email"  name="email"
                                                   class="form-control  @error('email') is-invalid @enderror"
                                                   value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                               <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input id="password" type="password"
                                                   placeholder="Nueva contraseña"
                                                   class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group mb-4">
                                            <input id="password-confirm" type="password"
                                                   placeholder="Confirma contraseña"
                                                   class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                        <div class="form-group text-end">
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
@endsection
