        @extends('layouts.master')
        @section('content')
            <main class="main">
                <div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
                    <div class="container">
                        <h1 class="page-title">@lang('messages.shopping_cart')<span>@lang('messages.shop')</span></h1>
                    </div><!-- End .container -->
                </div><!-- End .page-header -->
                <nav aria-label="breadcrumb" class="breadcrumb-nav">
                    <div class="container">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">@lang('messages.home')</a></li>
                            <li class="breadcrumb-item"><a href="#">@lang('messages.shop')</a></li>
                            <li class="breadcrumb-item active" aria-current="page">@lang('messages.shopping_cart')</li>
                        </ol>
                    </div><!-- End .container -->
                </nav><!-- End .breadcrumb-nav -->

                <div class="page-content">
                    <div class="cart">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-9">
                                    <table class="table table-cart table-mobile">
                                        <thead>
                                            <tr>
                                                <th>@lang('messages.product')</th>
                                                <th>@lang('messages.pro_price')</th>
                                                <th>@lang('messages.quantity')</th>
                                                <th>@lang('messages.total')</th>
                                                <th></th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php $total = 0 ?>
                                            @if (session('cart'))
                                                @foreach (session('cart') as $id => $value)

                                                    <?php $total += $value['price'] * $value['quantity'] ?>
                                                    <tr>
                                                        <td class="product-col">
                                                            <div class="product">
                                                                <figure class="product-media">
                                                                    <a href="#">
                                                                        <img src="/frontend/Images/{{ $value['image'] }}"
                                                                            alt="Product image">
                                                                    </a>
                                                                </figure>

                                                                <h3 class="product-title">
                                                                    <a href="#">{{ $value['name'] }}</a>
                                                                </h3><!-- End .product-title -->
                                                            </div><!-- End .product -->
                                                        </td>
                                                        <td class="price-col">${{ $value['price'] }}.00</td>
                                                        <td class="quantity-col">
                                                            <div class="cart-product-quantity">
                                                                <input type="number" class="form-control"
                                                                    value="{{ $value['quantity'] }}" min="1" max="10"
                                                                    step="1" data-decimals="0" required>
                                                            </div><!-- End .cart-product-quantity -->
                                                        </td>
                                                        <td class="total-col">${{ $value['price'] * $value['quantity'] }}.00</td>
                                                        <td class="remove-col"><a
                                                                href="{{ url('remove/' . $id) }}"><button
                                                                    class="btn-remove"><i
                                                                        class="icon-close"></i></a></button></td>
                                                    </tr>
                                                @endforeach
                                            @endif
                                        </tbody>
                                    </table><!-- End .table table-wishlist -->

                                    <div class="cart-bottom">
                                        <div class="cart-discount">
                                            <form action="#">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" required
                                                        placeholder="coupon code">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-outline-primary-2" type="submit"><i
                                                                class="icon-long-arrow-right"></i></button>
                                                    </div><!-- .End .input-group-append -->
                                                </div><!-- End .input-group -->
                                            </form>
                                        </div><!-- End .cart-discount -->

                                        <a href="" class="btn btn-outline-dark-2"><span>UPDATE CART</span><i
                                                class="icon-refresh"></i></a>

                                    </div><!-- End .cart-bottom -->
                                </div><!-- End .col-lg-9 -->
                                <aside class="col-lg-3">
                                    <div class="summary summary-cart">
                                        <h3 class="summary-title">@lang('messages.cart_total')</h3><!-- End .summary-title -->

                                        <table class="table table-summary">
                                            <tbody>
                                                <tr class="summary-subtotal">
                                                    <td>@lang('messages.subtotal'):</td>
                                                    <td>${{ $total }}.00</td>
                                                </tr><!-- End .summary-subtotal -->
                                                {{-- <tr class="summary-shipping">
                                                    <td>Shipping:</td>
                                                    <td>&nbsp;</td>
                                                </tr>

                                                <tr class="summary-shipping-row">
                                                    <td>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="free-shipping" name="shipping"
                                                                class="custom-control-input">
                                                            <label class="custom-control-label" for="free-shipping">Free
                                                                Shipping</label>
                                                        </div><!-- End .custom-control -->
                                                    </td>
                                                    <td>$0.00</td>
                                                </tr><!-- End .summary-shipping-row -->

                                                <tr class="summary-shipping-row">
                                                    <td>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="standart-shipping" name="shipping"
                                                                class="custom-control-input">
                                                            <label class="custom-control-label"
                                                                for="standart-shipping">Standart:</label>
                                                        </div><!-- End .custom-control -->
                                                    </td>
                                                    <td>$10.00</td>
                                                </tr><!-- End .summary-shipping-row -->

                                                <tr class="summary-shipping-row">
                                                    <td>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="express-shipping" name="shipping"
                                                                class="custom-control-input">
                                                            <label class="custom-control-label"
                                                                for="express-shipping">Express:</label>
                                                        </div><!-- End .custom-control -->
                                                    </td>
                                                    <td>$20.00</td>
                                                </tr><!-- End .summary-shipping-row --> --}}

                                                <tr class="summary-total">
                                                    <td>@lang('messages.total'):</td>
                                                    <td>${{ $total }}.00</td>
                                                </tr><!-- End .summary-total -->
                                            </tbody>
                                        </table><!-- End .table table-summary -->

                                        <a href="checkout.html"
                                            class="btn btn-outline-primary-2 btn-order btn-block">@lang('messages.proceed')</a>
                                    </div><!-- End .summary -->

                                    <a href="{{ route('get.view.home') }}" class="btn btn-outline-dark-2 btn-block mb-3"><span>@lang('messages.continue_shopping')</span><i class="icon-refresh"></i></a>
                                </aside><!-- End .col-lg-3 -->
                            </div><!-- End .row -->
                        </div><!-- End .container -->
                    </div><!-- End .cart -->
                </div><!-- End .page-content -->
            </main><!-- End .main -->
        @stop()
