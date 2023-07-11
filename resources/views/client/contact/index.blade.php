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
    <branch-map :branchs="{{ $branchs }}"></branch-map>
    <section class="section-border pt-50 pb-50 bg-grey-9">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-10 m-auto">
                    <div class="contact-from-area padding-20-row-col wow FadeInUp">
                        <h3 class="mb-10 text-center">Escribenos</h3>
                        <p class="text-muted mb-30 text-center font-sm">Tus necesidades son nuestra prioridad.</p>
                        @if(Session::has('success'))
                            <div class="alert alert-success">
                                {{Session::get('success')}}
                            </div>
                        @endif
                        <form class="contact-form-style text-center" id="contact-form"
                              action="{{ route('contact.store') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="input-style">
                                        <input value="{{old('name')}}" name="name" placeholder="Nombre" type="text"
                                               class="{{ $errors->has('name') ? 'form-control is-invalid' : '' }}">
                                    </div>
                                    <div class="bg-transparent mb-20 text-start">
                                        @if ($errors->has('name'))
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="input-style">
                                        <input value="{{old('email')}}" name="email" placeholder="Correo Electrónico"
                                               type="email"
                                               class="{{ $errors->has('email') ? 'form-control is-invalid' : '' }}">
                                    </div>
                                    <div class="bg-transparent mb-20 text-start">
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="input-style">
                                        <input value="{{old('phone')}}" name="phone" placeholder="Telefono"
                                               type="number"
                                               class="{{ $errors->has('phone') ? 'form-control is-invalid' : '' }}">
                                    </div>
                                    <div class="bg-transparent mb-20 text-start">
                                        @if ($errors->has('phone'))
                                            <span class="text-danger">{{ $errors->first('phone') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="input-style">
                                        <input value="{{old('subject')}}" name="subject" placeholder="Asunto"
                                               type="text"
                                               class="{{ $errors->has('subject') ? 'form-control is-invalid' : '' }}">
                                    </div>
                                    <div class="bg-transparent mb-20 text-start">
                                        @if ($errors->has('subject'))
                                            <span class="text-danger">{{ $errors->first('subject') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="textarea-style">
                                        @if(old('message'))
                                            <textarea style="resize:none; text-align: left" name="message" placeholder="Mensaje...">{{{ old('message') }}}</textarea>
                                        @else
                                            <textarea style="resize:none; text-align: left" name="message" placeholder="Mensaje..."></textarea>
                                        @endif
                                    </div>
                                    <div class="bg-transparent mb-20 text-start">
                                        @if ($errors->has('message'))
                                            <span class="text-danger">{{ $errors->first('message') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-12">
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
