@extends('client.template.main')

@section('content')
    <main class="main">
        <section class="pt-150 pb-150">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 m-auto">
                        <div class="row align-content-end justify-content-end">
                            <div class="col-lg-6">
                                <div class="p-30 background-white border-radius-5">
                                    <div class="padding_eight_all bg-white">
                                        <div class="heading_s1">
                                            <h3 class="mb-30">Verifica tu correo electrónico</h3>
                                        </div>
                                        <p class="mb-50 font-xl">
                                            Para brindarte una mejor atención, necesitamos que verifiques tu correo electrónico y asi puedas acceder a todo el contenido.
                                        </p>
                                        <span class="text-grey-5 font-xl"> {{ __('Si no recibiste uno, haz') }},</span>
                                        <form class="d-inline font-xl mb-30" method="POST" action="{{ route('verification.resend') }}">
                                            @csrf
                                            <button type="submit" class="btn-link text-primary border-0 bg-white p-0 m-0 align-baseline">
                                                <span class="font-xl">{{ __(' clic aqui ') }}</span>
                                            </button>
                                            <span class="text-grey-5 font-xl"> para reenviar.</span>
                                        </form>

                                        @if (session('resent'))
                                            <div class="alert alert-success mt-30" role="alert">
                                                {{ __('Se ha enviado un nuevo enlace de verificación a su dirección de correo electrónico.') }}
                                            </div>
                                        @endif
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
