@extends('client.layout.master')
@section('content')
    <!-- Shop Product Right Sidebar
            ============================================= -->
    <section id="product" class="shop shop-product pb-60">
        <div class="container">
            <div class="row mb-70">
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="product-img">
                        <img class="img-responsive" src="http://demo.zytheme.com/hairy/assets/images/shop/full/1.jpg"
                            alt="product image">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
                    <div class="product-title">
                        <h3>SS Black Razor</h3>
                    </div>
                    <div class="product-review text-center-xs mb-40">
                        <span class="product-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </span>
                        <span>(3 customer review)</span>
                    </div>
                    <!--- .product-review end -->
                    <!-- .product-title end -->
                    <div class="product-meta mb-20">
                        <span class="product-price">
                            $ 89.00
                        </span>
                        <span class="product-available">
                            Availability: <span> In Stock</span>
                        </span>
                        <!-- .product-price end -->
                        <div class="clearfix"></div>
                    </div>
                    <div class="product-desc">
                        <p>Duis ipsum dolor sit amet, consecter adipis elite, sedo eiusmod tempor incididunt ut labor et
                            dolor magna aliquaeni minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.
                        </p>
                    </div>
                    <!-- .product-desc end -->
                    <div class="product-action clearfix">
                        <div class="product-quantity pull-left">
                            <span>
                                <span class="qant-plus"><i class="fa fa-caret-up"></i></span>
                                <input type="number" value="2" id="pro-qunt" min="1">
                                <span class="qant-minus"><i class="fa fa-caret-down"></i></span>
                            </span>
                        </div>
                        <div class="product-cta">
                            <a class="btn btn--secondary btn--rounded" href="#">add to cart</a>
                        </div>
                    </div>
                    <!-- .product-action end -->
                    <!-- .product-action end -->
                    <div class="product-share mt-30">
                        <a class="share-facebook" href="#"><i class="fa fa-facebook"></i></a>
                        <a class="share-twitter" href="#"><i class="fa fa-twitter"></i></a>
                        <a class="share-google-plus" href="#"><i class="fa fa-google-plus"></i></a>
                        <a class="share-linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                    <!-- .product-share end -->

                </div>
                <!-- .sidebar-full end -->
            </div>
            <!-- .row end -->
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">

                    <!-- .product-action end -->
                    <div class="product-tabs">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#information" aria-controls="information"
                                    role="tab" data-toggle="tab">information</a></li>
                            <li role="presentation"><a href="#reviews" aria-controls="reviews" role="tab"
                                    data-toggle="tab">reviews(3)</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active product-details" id="information">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-3">
                                        <table class="table no-border">
                                            <tbody>
                                                <tr>
                                                    <td>Brand:</td>
                                                    <td>Feather</td>
                                                </tr>
                                                <tr>
                                                    <td>Color:</td>
                                                    <td>Black</td>
                                                </tr>
                                                <tr>
                                                    <td>Handle length:</td>
                                                    <td>120mm</td>
                                                </tr>
                                                <tr>
                                                    <td>Blade length:</td>
                                                    <td>50mm</td>
                                                </tr>
                                                <tr>
                                                    <td>Full length:</td>
                                                    <td>150mm</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- #details end -->
                            <div role="tabpanel" class="tab-pane reviews" id="reviews">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-6">
                                        <ul class="product-review list-unstyled">
                                            <li class="review-comment">
                                                <div class="user--avatar">R</div>
                                                <div class="review--content">
                                                    <h6>Ryan Printz</h6>
                                                    <p class="review-date">June 17, 2017</p>
                                                    <div class="product-rating pull-right">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="product-comment">
                                                        <p>Lorem ipsum dolor sit amet, consectet adipisicing elit, sed
                                                            eiusmod tempor incididun ut labore dolor magna aliqua enim
                                                            minim.</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <!-- .review-comment end -->

                                            <li class="review-comment">
                                                <div class="user--avatar">M</div>
                                                <div class="review--content">
                                                    <h6>Mark Smith</h6>
                                                    <p class="review-date">June 17, 2017</p>
                                                    <div class="product-rating pull-right">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="product-comment">
                                                        <p>Lorem ipsum dolor sit amet, consectet adipisicing elit, sed
                                                            eiusmod tempor incididun ut labore dolor magna aliqua enim
                                                            minim.</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <!-- .review-comment end -->

                                            <li class="review-comment">
                                                <div class="user--avatar">s</div>
                                                <div class="review--content">
                                                    <h6>Steve Martin</h6>
                                                    <p class="review-date">June 17, 2017</p>
                                                    <div class="product-rating pull-right">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="product-comment">
                                                        <p>Lorem ipsum dolor sit amet, consectet adipisicing elit, sed
                                                            eiusmod tempor incididun ut labore dolor magna aliqua enim
                                                            minim.</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <!-- .review-comment end -->

                                        </ul>
                                        <div class="add-review mb-30">
                                            <h3>Your Rating</h3>
                                            <span>Your rating *</span>
                                            <div class="product-rating">
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                        </div>
                                        <div class="form-review">
                                            <form>
                                                <textarea class="form-control" id="review" rows="2" placeholder="your Review"></textarea>
                                                <input type="text" class="form-control" id="name"
                                                    placeholder="Name *" />
                                                <input type="email" class="form-control" id="email"
                                                    placeholder="Email *" />
                                                <button type="submit"
                                                    class="btn btn--secondary btn--rounded">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- #reviews end -->
                        </div>
                        <!-- #tab-content end -->
                    </div>
                    <!-- .product-tabs end -->
                </div>
                <!-- .col-md-12 end -->
            </div>
            <!-- .row end -->

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="product-related shop-categories">
                        <div class="product-related-title">
                            <h5>Related Products</h5>
                        </div>
                        <div class="row">

                            <!-- Product #1 -->
                            <div class="col-xs-12 col-sm-6 col-md-3 product-item">
                                <div class="product--img">
                                    <img src="http://demo.zytheme.com/hairy/assets/images/shop/grid/1.jpg"
                                        alt="Product" />
                                    <div class="product--hover">
                                        <div class="product--action">
                                            <a href="#">Add To Cart</a>
                                        </div>
                                    </div>
                                    <!-- .product-overlay end -->
                                </div>
                                <!-- .product-img end -->
                                <div class="product--content">
                                    <div class="product--title">
                                        <h3><a href="#">Sharp Shear</a></h3>
                                    </div>
                                    <!-- .product-title end -->
                                    <div class="product--price">
                                        <span>$35.00</span>
                                    </div>
                                    <!-- .product-price end -->
                                </div>
                                <!-- .product-bio end -->
                            </div>
                            <!-- .product end -->

                            <!-- Product #2 -->
                            <div class="col-xs-12 col-sm-6 col-md-3 product-item">
                                <div class="product--img">
                                    <img src="http://demo.zytheme.com/hairy/assets/images/shop/grid/2.jpg"
                                        alt="Product" />
                                    <div class="product--hover">
                                        <div class="product--action">
                                            <a href="#">Add To Cart</a>
                                        </div>
                                    </div>
                                    <!-- .product-overlay end -->
                                </div>
                                <!-- .product-img end -->
                                <div class="product--content">
                                    <div class="product--title">
                                        <h3><a href="#">Flat Comb</a></h3>
                                    </div>
                                    <!-- .product-title end -->
                                    <div class="product--price">
                                        <span>$5.00</span>
                                    </div>
                                    <!-- .product-price end -->
                                </div>
                                <!-- .product-bio end -->
                            </div>
                            <!-- .product end -->

                            <!-- Product #3 -->
                            <div class="col-xs-12 col-sm-6 col-md-3 product-item">
                                <div class="product--img">
                                    <img src="http://demo.zytheme.com/hairy/assets/images/shop/grid/3.jpg"
                                        alt="Product" />
                                    <div class="product--hover">
                                        <div class="product--action">
                                            <a href="#">Add To Cart</a>
                                        </div>
                                    </div>
                                    <!-- .product-overlay end -->
                                </div>
                                <!-- .product-img end -->
                                <div class="product--content">
                                    <div class="product--title">
                                        <h3><a href="#">Fade Clipper</a></h3>
                                    </div>
                                    <!-- .product-title end -->
                                    <div class="product--price">
                                        <span>$105.00</span>
                                    </div>
                                    <!-- .product-price end -->
                                </div>
                                <!-- .product-bio end -->
                            </div>
                            <!-- .product end -->

                            <!-- Product #4 -->
                            <div class="col-xs-12 col-sm-6 col-md-3 product-item">
                                <div class="product--img">
                                    <img src="http://demo.zytheme.com/hairy/assets/images/shop/grid/4.jpg"
                                        alt="Product" />
                                    <div class="product--hover">
                                        <div class="product--action">
                                            <a href="#">Add To Cart</a>
                                        </div>
                                    </div>
                                    <!-- .product-overlay end -->
                                </div>
                                <!-- .product-img end -->
                                <div class="product--content">
                                    <div class="product--title">
                                        <h3><a href="#">Gel Cream</a></h3>
                                    </div>
                                    <!-- .product-title end -->
                                    <div class="product--price">
                                        <span>$7.5</span>
                                    </div>
                                    <!-- .product-price end -->
                                </div>
                                <!-- .product-bio end -->
                            </div>
                            <!-- .product end -->

                        </div>
                        <!-- .row end -->
                    </div>
                    <!-- .product-related end  -->

                </div>
                <!-- .row col-md-12 -->
            </div>
            <!-- .row end -->

        </div>
        <!-- .container end -->
    </section>
    <!-- #product end -->
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
                                <h1>Single Product</h1>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <ol class="breadcrumb breadcrumb-bottom">
                            <li><a href="index-2.html">Home</a></li>
                            <li><a href="index-2.html">shop</a></li>
                            <li class="active">Single Product</li>
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
