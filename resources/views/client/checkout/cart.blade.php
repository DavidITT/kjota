@extends('client.template.main')

@section('content')
    <main class="main">
        <section class="mt-50 mb-50">
            <div class="container">
                <h3 class="text-brand mb-30 text-center">Carrito de compras</h3>
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table class="table shopping-summery text-center clean">
                                <thead>
                                <tr class="main-heading">
                                    <th scope="col">Imagen</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Precio</th>
                                    <th scope="col">Cantidad</th>
                                    <th scope="col">Subtotal</th>
                                    <th scope="col">Quitar</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="image product-thumbnail"><img src="{{ asset('assets/client/imgs/shop/products/arcon-1.jpg')  }}" alt="#"></td>
                                    <td class="product-des product-name">
                                        <h5 class="product-name"><a href="shop-product-right.html">KJ Arcon-1</a></h5>
                                        <p class="font-xs">12 x 13 x 12 cm</p>
                                    </td>
                                    <td class="price" data-title="Precio"><span>$75.00 </span></td>
                                    <td class="text-center" data-title="Cantidad">
                                        <div class="detail-qty border radius  m-auto">
                                            <a href="#" class="qty-down"><i class="fi-rs-angle-small-down"></i></a>
                                            <span class="qty-val">2</span>
                                            <a href="#" class="qty-up"><i class="fi-rs-angle-small-up"></i></a>
                                        </div>
                                    </td>
                                    <td class="text-right" data-title="Subtotal">
                                        <span>$150.00 </span>
                                    </td>
                                    <td class="action" data-title="Quitar"><a href="#" class="text-muted"><i class="fi-rs-trash"></i></a></td>
                                </tr>
                                <tr>
                                    <td class="image"><img src="{{ asset('assets/client/imgs/shop/products/caja-pastel.jpg')  }}" alt="#"></td>
                                    <td class="product-des">
                                        <h5 class="product-name"><a href="shop-product-right.html">Caja pastel</a></h5>
                                        <p class="font-xs">12 x 45 x 12 cm.<br>
                                    </td>
                                    <td class="price" data-title="Precio"><span>$75.00 </span></td>
                                    <td class="text-center" data-title="Cantidad">
                                        <div class="detail-qty border radius  m-auto">
                                            <a href="#" class="qty-down"><i class="fi-rs-angle-small-down"></i></a>
                                            <span class="qty-val">2</span>
                                            <a href="#" class="qty-up"><i class="fi-rs-angle-small-up"></i></a>
                                        </div>
                                    </td>
                                    <td class="text-right" data-title="Subtotal">
                                        <span>$150.00 </span>
                                    </td>
                                    <td class="action" data-title="Quitar"><a href="#" class="text-muted"><i class="fi-rs-trash"></i></a></td>
                                </tr>
                                <tr>
                                    <td class="image"><img src="{{ asset('assets/client/imgs/shop/products/kr.2.jpg')  }}" alt="#"></td>
                                    <td class="product-des">
                                        <h5 class="product-name"><a href="shop-product-right.html">KR-2</a></h5>
                                        <p class="font-xs">12 x 45 x 12 cm.<br>
                                    </td>
                                    <td class="price" data-title="Precio"><span>$75.00 </span></td>
                                    <td class="text-center" data-title="Cantidad">
                                        <div class="detail-qty border radius  m-auto">
                                            <a href="#" class="qty-down"><i class="fi-rs-angle-small-down"></i></a>
                                            <span class="qty-val">2</span>
                                            <a href="#" class="qty-up"><i class="fi-rs-angle-small-up"></i></a>
                                        </div>
                                    </td>
                                    <td class="text-right" data-title="Subtotal">
                                        <span>$150.00 </span>
                                    </td>
                                    <td class="action" data-title="Quitar"><a href="#" class="text-muted"><i class="fi-rs-trash"></i></a></td>
                                </tr>
                                <tr>
                                    <td colspan="6" class="text-end">
                                        <a href="#" class="text-muted"> <i class="fi-rs-cross-small"></i> Limpiar carrito</a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="divider center_icon mt-50 mb-50"><i class="fi-rs-fingerprint"></i></div>
                        <div class="row mb-50 justify-content-end">
                            <div class="col-lg-6 col-md-12">
                                <div class="border p-md-4 p-30 border-radius cart-totals">
                                    <div class="heading_s1 mb-3">
                                        <h4>Total</h4>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                            <tr>
                                                <td class="cart_total_label">Subtotal</td>
                                                <td class="cart_total_amount"><span class="font-lg fw-900 text-brand">$240.00</span></td>
                                            </tr>
                                            <tr>
                                                <td class="cart_total_label">Envio</td>
                                                <td class="cart_total_amount"> <i class="ti-gift mr-5"></i> $240.00</td>
                                            </tr>
                                            <tr>
                                                <td class="cart_total_label">Cupón</td>
                                                <td class="cart_total_amount"> <i class="ti-gift mr-5"></i> GRACIASMAMA <span class="text-grey-4">-$43.00</span></td>
                                            </tr>
                                            <tr>
                                                <td class="cart_total_label">Total</td>
                                                <td class="cart_total_amount"><strong><span class="font-xl fw-900 text-brand">$480.00</span></strong></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="d-flex justify-content-end">
                                        <a href="{{route('checkout.shipping')}}" class="btn"> <i class="fi-rs-box-alt mr-10"></i> Finalizar pedido</a>
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


