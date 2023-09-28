@extends('client.layout.master')
@section('content')
    <!-- Shop Cart
    ============================================= -->
    <section id="shopcart" class="shop shop-cart bg-white">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="shop-cart-heading">
                        You have (3 items)
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="cart-table table-responsive">
                        <table class="table">
                            <thead>
                                <tr class="cart-product">
                                    <th></th>
                                    <th class="cart-product-item">Name</th>
                                    <th class="cart-product-price">Price</th>
                                    <th class="cart-product-quantity">Quantity</th>
                                    <th class="cart-product-total">Total</th>
                                    <th class="cart-product-remove"></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="cart-product">
                                    <td></td>
                                    <td class="cart-product-item">

                                        <div class="cart-product-img">
                                            <a href="#">
                                                <img src="http://demo.zytheme.com/hairy/assets/images/shop/cart/1.jpg"
                                                    alt="product" />
                                            </a>
                                        </div>
                                        <div class="cart-product-name">
                                            <h6><a href="#">Gel Cream</a></h6>
                                        </div>
                                    </td>
                                    <td class="cart-product-price">$ 7.5</td>
                                    <td class="cart-product-quantity">
                                        <div class="product-quantity">
                                            <span class="qant-plus"><i class="fa fa-caret-up"></i></span>
                                            <input type="text" value="1" id="pro1-qunt" readonly>
                                            <span class="qant-minus"><i class="fa fa-caret-down"></i></span>
                                        </div>
                                    </td>
                                    <td class="cart-product-total">$ 7.5</td>
                                    <td>
                                        <div class="cart-product-remove">
                                            <i class="lnr lnr-cross"></i>
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                                <tr class="cart-product">
                                    <td></td>
                                    <td class="cart-product-item">
                                        <div class="cart-product-img">
                                            <a href="#">
                                                <img src="http://demo.zytheme.com/hairy/assets/images/shop/cart/2.jpg"
                                                    alt="product" />
                                            </a>
                                        </div>
                                        <div class="cart-product-name">
                                            <h6><a href="#">Hair Dryer</a></h6>
                                        </div>
                                    </td>
                                    <td class="cart-product-price">$ 35.00</td>
                                    <td class="cart-product-quantity">
                                        <div class="product-quantity">
                                            <span class="qant-plus"><i class="fa fa-caret-up"></i></span>
                                            <input type="text" value="1" id="pro2-qunt" readonly>
                                            <span class="qant-minus"><i class="fa fa-caret-down"></i></span>
                                        </div>
                                    </td>
                                    <td class="cart-product-total">$ 35.00</td>
                                    <td>
                                        <div class="cart-product-remove">
                                            <i class="lnr lnr-cross"></i>
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                                <tr class="cart-product">
                                    <td></td>
                                    <td class="cart-product-item">
                                        <div class="cart-product-img">
                                            <a href="#">
                                                <img src="http://demo.zytheme.com/hairy/assets/images/shop/cart/3.jpg"
                                                    alt="product" />
                                            </a>
                                        </div>
                                        <div class="cart-product-name">
                                            <h6><a href="#">Hair Brush</a></h6>
                                        </div>
                                    </td>
                                    <td class="cart-product-price">$ 23.00</td>
                                    <td class="cart-product-quantity">
                                        <div class="product-quantity">
                                            <span class="qant-plus"><i class="fa fa-caret-up"></i></span>
                                            <input type="text" value="1" id="pro3-qunt" readonly>
                                            <span class="qant-minus"><i class="fa fa-caret-down"></i></span>
                                        </div>
                                    </td>
                                    <td class="cart-product-total">$ 23.00</td>
                                    <td>
                                        <div class="cart-product-remove">
                                            <i class="lnr lnr-cross"></i>
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- .cart-table end -->
                </div>
                <!-- .col-md-12 end -->
            </div>
            <!-- .row end -->
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="cart-product-action">
                        <form class="form-inline pull-left">
                            <input type="text" class="form-control mb-0" id="coupon" placeholder="Coupon Code" />
                            <button type="submit" class="btn btn--secondary">Apply</button>
                        </form>
                        <div class="cart-total-amount text-right">
                            Subtotal :<span class="">$100.5</span>
                        </div>
                        <!-- .cart-total-amount end -->
                    </div>
                </div>
                <!-- .col-md-6 end -->
            </div>
            <!-- .row end -->
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <a class="btn btn--secondary btn--rounded pull-right" href="#">Checkout</a>
                </div>
            </div>
        </div>
        <!-- .container end -->
    </section>
    <!-- #shopcart end -->
@endsection
@section('page-title')
    <!-- Page Title #1
        ============================================= -->
    <section id="page-title" class="page-title bg-overlay bg-overlay-dark bg-parallax">
        <div class="bg-section">
            <img src="http://demo.zytheme.com/hairy/assets/images/page-titles/3.jpg" alt="Background" />
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                    <div class="title title-2 text-center">
                        <div class="title--content">
                            <div class="title--heading mb-20">
                                <h1>Shopping Cart</h1>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <ol class="breadcrumb breadcrumb-bottom">
                            <li><a href="index-2.html">Home</a></li>
                            <li><a href="index-2.html">shop</a></li>
                            <li class="active">Shopping Cart</li>
                        </ol>
                    </div>
                    <!-- .title end -->
                </div>
                <!-- .col-md-12 end -->
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </section>
    <!-- #page-title end -->
@endsection
