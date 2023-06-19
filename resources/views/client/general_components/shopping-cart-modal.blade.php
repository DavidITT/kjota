<div class="header-action-icon-2">
    @auth
    <a href="shop-wishlist.html">
        <img class="svgInject" alt="Evara" src="{{asset('assets/client/imgs/theme/icons/icon-heart.svg')}}">
        <span class="pro-count blue">4</span>
    </a>
    @endif
</div>
<div class="header-action-icon-2">
    <a class="mini-cart-icon" href="{{route('shopping-cart')}}">
        <img alt="Evara" src="{{asset('assets/client/imgs/theme/icons/icon-cart.svg')}}">
        <span class="pro-count blue">5</span>
    </a>
    <div class="cart-dropdown-wrap cart-dropdown-hm2">
        <ul>
            <li>
                <div class="shopping-cart-img">
                    <a href="shop-product-right.html"><img alt="Evara" src="{{ asset('assets/client/imgs/shop/products/kr.2.jpg')  }}"></a>
                </div>
                <div class="shopping-cart-title">
                    <h4><a href="shop-product-right.html">KR.2</a></h4>
                    <h4><span>2 × </span>$800.00</h4>
                </div>
                <div class="shopping-cart-delete">
                    <a href="#"><i class="fi-rs-cross-small"></i></a>
                </div>
            </li>
            <li>
                <div class="shopping-cart-img">
                    <a href="shop-product-right.html"><img alt="Evara" src="{{ asset('assets/client/imgs/shop/products/caja-pastel.jpg')  }}"></a>
                </div>
                <div class="shopping-cart-title">
                    <h4><a href="shop-product-right.html">Caja Pastel</a></h4>
                    <h4><span>1 × </span>$32.00</h4>
                </div>
                <div class="shopping-cart-delete">
                    <a href="#"><i class="fi-rs-cross-small"></i></a>
                </div>
            </li>
        </ul>
        <div class="shopping-cart-footer">
            <div class="shopping-cart-total">
                <h4>Total <span>$400.00</span></h4>
            </div>
            <div class="shopping-cart-button">
                <a href="{{route('shopping-cart')}}" class="outline">Ver Carrito</a>
            </div>
        </div>
    </div>
</div>
