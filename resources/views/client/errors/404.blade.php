@extends('client.template.main')

@section('content')
    <main class="main page-404">
        <div class="container">
            <div class="row align-items-center height-60vh text-center">
                <div class="col-lg-8 m-auto">
                    <p class="mb-50"><img src="{{ asset('assets/client/imgs/theme/404.png') }}" alt="404" class="hover-up"></p>
                    <h2 class="mb-30">Oups.. No se encontro nada</h2>
                    <p class="font-lg text-grey-700 mb-30">
                        El enlace o recurso al que intenta acceder puede estar roto o pudo haber sido eliminado,<br> regresa al <a href="{{ route('home') }}"> <span> Inicio</span></a> o <a href="{{ route('contact') }}"><span>Contactanos </span></a> para reportarnos el problema.
                    </p>
                    <form class="contact-form-style text-center" id="contact-form" action="#" method="post">
                        <a class="btn btn-default submit-auto-width font-xs hover-up" href="{{ route('home') }}">Regresar</a>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
