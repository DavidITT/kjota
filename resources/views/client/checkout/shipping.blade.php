@extends('client.template.main')

@section('content')
    <main class="main">
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="toggle_info">
                            <span><i class="fi-rs-label mr-10"></i><span class="text-muted">¿Tienes un cupón?</span> <a
                                    href="#coupon" data-bs-toggle="collapse" class="collapsed" aria-expanded="false">Click aqui para ingresar cupón</a></span>
                        </div>
                        <div class="panel-collapse collapse coupon_form " id="coupon">
                            <div class="panel-body">
                                <p class="mb-30 font-sm">Si tiene un código de cupón, aplíquelo a continuación.</p>
                                <form method="post">
                                    <div class="form-group">
                                        <input type="text" placeholder="Ingresa un cupón...">
                                    </div>
                                    <div class="form-group d-flex justify-content-end mt-20">
                                        <button class="btn  btn-md" name="login">Aplicar cupón</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="divider mt-50 mb-50"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <form method="post">
                            <div class="mb-20">
                                <h5>Información de Contacto</h5>
                            </div>
                            <div class="form-group">
                                <input type="text" required="" name="name" placeholder="Nombre">
                            </div>
                            <div class="form-group">
                                <input type="text" required="" name="lastname" placeholder="Apellido">
                            </div>
                            <div class="form-group">
                                <input type="tel" required="" name="phone" placeholder="Telefono">
                            </div>
                            <div class="mtb-20">
                                <h5>Dirección de Envio</h5>
                            </div>
                            <div class="form-group">
                                <input required="" type="text" name="zip" placeholder="Codigo Postal">
                            </div>
                            <div class="form-group">
                                <input type="text" name="street" required="" placeholder="Calle">
                            </div>
                            <div class="form-group">
                                <input type="text" name="num" required="" placeholder="Número">
                            </div>
                            <div class="form-group">
                                <input type="text" name="reference" required="" placeholder="Referencia">
                            </div>
                            <div class="form-group">
                                <input required="" type="text" name="city" placeholder="Ciudad">
                            </div>
                            <div class="form-group">
                                <input required="" type="text" name="state" placeholder="Estado">
                            </div>
                            <div class="mtb-20">
                                <h5>Información Adicional</h5>
                            </div>
                            <div class="form-group mb-20">
                                <textarea rows="5" placeholder="Notas de orden"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <div class="order_review">
                            <div class="mb-20">
                                <h4>Tu pedido</h4>
                            </div>
                            <div class="table-responsive order_table text-center">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th colspan="2">Producto</th>
                                        <th>Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="image product-thumbnail"><img
                                                src="{{ asset('assets/client/imgs/shop/products/arcon-1.jpg') }}"
                                                alt="#"></td>
                                        <td>
                                            <h5><a href="shop-product-full.html">Arcon-1</a></h5> <span
                                                class="product-qty">x 2</span>
                                        </td>
                                        <td>$180.00</td>
                                    </tr>
                                    <tr>
                                        <td class="image product-thumbnail"><img
                                                src="{{ asset('assets/client/imgs/shop/products/caja-pastel.jpg') }}"
                                                alt="#"></td>
                                        <td>
                                            <h5><a href="shop-product-full.html">Caja Pastel</a></h5> <span
                                                class="product-qty">x 1</span>
                                        </td>
                                        <td>$65.00</td>
                                    </tr>
                                    <tr>
                                        <td class="image product-thumbnail"><img
                                                src="{{ asset('assets/client/imgs/shop/products/kj-cerveza.jpg') }}"
                                                alt="#"></td>
                                        <td><i class="ti-check-box font-small text-muted mr-10"></i>
                                            <h5><a href="shop-product-full.html">KJ Cerveza</a></h5> <span
                                                class="product-qty">x 1</span>
                                        </td>
                                        <td>$35.00</td>
                                    </tr>
                                    <tr>
                                        <th>SubTotal</th>
                                        <td class="product-subtotal" colspan="2">$280.00</td>
                                    </tr>
                                    <tr>
                                        <th>Envio</th>
                                        <td colspan="2"><em>Envio Gratis</em></td>
                                    </tr>
                                    <tr>
                                        <th>Total</th>
                                        <td colspan="2" class="product-subtotal"><span
                                                class="font-xl text-brand fw-900">$280.00</span></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="d-flex justify-content-end">
                                <a href="{{route('checkout.payment')}}"
                                   class="btn btn-fill-out btn-block mt-30 ">Siguiente</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
