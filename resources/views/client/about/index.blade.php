@extends('client.template.main')

@section('content')
    <section class="section-padding">
        <div class="container pt-25">
            <div class="row">
                <div class="col-lg-6 align-self-center mb-lg-0 mb-4">
                    <h6 class="mt-0 mb-15 text-uppercase font-sm text-brand wow fadeIn animated">Nosotros</h6>
                    <h1 class="font-heading mb-40">
                        ¿Quienes somos?
                    </h1>
                    <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A architecto dolorum eligendi eos
                        explicabo, libero maiores natus nulla odio odit officiis quae, reiciendis rem repellendus
                        tenetur totam vitae. Amet aspernatur at delectus deserunt dolores, est et excepturi illum in
                        incidunt ipsam laborum libero magni maiores nesciunt praesentium quae quasi quis, quos ratione
                        rem sapiente sed sint suscipit vero voluptas, voluptate. Amet animi delectus error eum,
                        excepturi exercitationem in ipsa laudantium rem voluptas! A dolore labore laboriosam nostrum
                        quae sapiente sed sequi sint unde veniam. Ad blanditiis consequuntur debitis dicta inventore
                        laboriosam laudantium modi molestiae mollitia placeat quas, ratione recusandae repellendus?</p>
                </div>
                <div class="col-lg-6 text-center align-self-center">
                    <img class="rounded-circle" width="300" height="300" src="{{asset('assets/general/logo-2.jpg')}}"
                         alt="">
                </div>
            </div>
        </div>
    </section>
    <section id="work" class="mt-40 pt-50 pb-50 section-border">
        <div class="container">
            <div class="row mb-50">
                <div class="col-lg-12 col-md-12 text-center">
                    <h6 class="mt-0 mb-5 text-uppercase  text-brand font-sm wow fadeIn animated">KJOTA</h6>
                    <h2 class="mb-15 text-grey-1 wow fadeIn animated">Nuestras sucursales<br></h2>
                    <p class="w-50 m-auto text-grey-3 wow fadeIn animated">Ven a visitarnos a la sucursal que este mas cerca de ti</p>
                </div>
            </div>
            <div class="row">
                @foreach ($branchs as $branch)
                <div class="col-md-4 text-center mb-4">
                    <img class="btn-shadow-brand hover-up border-radius-10 bg-brand-muted wow fadeIn animated"
                         src="{{asset($branch->image->url)}}" style="width: 100%; height: 256px" alt="image_branch">
                    <h4 class="mt-30 mb-10 wow fadeIn animated">Sucursal {{ $branch->name }}</h4>
                    <a href="{{'https://maps.google.com/?q='.$branch->address}}"
                       target="_blank" class="btn-sm btn-brand-outline font-weight-bold text-brand bg-white text-hover-white mt-20 border-radius-5 btn-shadow-brand hover-up">
                        <i class="fi-rs-marker mr-10"></i>Ver mapa
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
