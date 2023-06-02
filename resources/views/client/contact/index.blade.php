@extends('client.template.main')

@section('content')
    <section class="hero-2 bg-primary d-flex align-items-center">
        <div class="hero-content">
            <div class="container">
                <div class="text-center">
                    <h4 class="text-brand">Ponte en contacto con nosotros</h4>
                    <h1 class="mb-20 mb-20 wow fadeIn animated font-xxl fw-900">
                        ¿Necesitas una caja con <span class="text-style-1">medidas</span> especificas?
                    </h1>
                    <p class="w-50 m-auto wow fadeIn animated text-white">Dejanos un mensaje para hacerte una
                        cotización.</p>

                </div>
            </div>
        </div>
    </section>
    <branch-map></branch-map>
    <section class="section-border pt-50 pb-50 bg-grey-9">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-10 m-auto">
                    <div class="contact-from-area padding-20-row-col wow FadeInUp">
                        <h3 class="mb-10 text-center">Escribenos</h3>
                        <p class="text-muted mb-30 text-center font-sm">Tus necesidades son nuestra prioridad.</p>
                        <form class="contact-form-style text-center" id="contact-form" action="#" method="post">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="input-style mb-20">
                                        <input name="name" placeholder="Nombre" type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="input-style mb-20">
                                        <input name="email" placeholder="Correo Electrónico" type="email">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="input-style mb-20">
                                        <input name="telephone" placeholder="Telefono" type="tel">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="input-style mb-20">
                                        <input name="subject" placeholder="Asunto" type="text">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="textarea-style mb-30">
                                        <textarea name="message" placeholder="Mensjae..."></textarea>
                                    </div>
                                    <button class="submit submit-auto-width" type="submit">Enviar</button>
                                </div>
                            </div>
                        </form>
                        <p class="form-messege"></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
