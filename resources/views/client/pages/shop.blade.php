@extends('client.layout.master')
@section('content')
    <!-- Shop #4
                                                                                    ===
                                                                                    === === === === === === === === === === === === === === -->
    <section id="shop" class="shop shop-3 bg-white">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-3">
                    <!-- Search
                                                                                    ============================================= -->
                    <div class="widget widget-search">
                        <div class="widget--content">
                            <form class="form-search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search here..">
                                    <span class="input-group-btn">
                                        <button class="btn" type="button"><i class="fa fa-search"></i></button>
                                    </span>
                                </div>
                                <!-- /input-group -->
                            </form>
                        </div>
                    </div>
                    <!-- .widget-search end -->

                    <!-- Categories
                                                                                    ============================================= -->
                    <div class="widget widget-categories">
                        <div class="widget--title">
                            <h5>categories</h5>
                        </div>
                        <div class="widget--content">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="#">Clippers</a>
                                </li>
                                <li>
                                    <a href="#">Brushes</a>
                                </li>
                                <li>
                                    <a href="#">Creams & Soaps</a>
                                </li>
                                <li>
                                    <a href="#">After Shaves</a>
                                </li>
                                <li>
                                    <a href="#">Razors</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- .widget-categories end -->
                    <!-- Recent Products
                                                                                    ============================================= -->
                    <div class="widget widget-recent-products">
                        <div class="widget--title">
                            <h5>Best Sellers</h5>
                        </div>
                        <div class="widget--content">
                            <!-- Product #1 -->
                            <div class="product clearfix">
                                <a href="#">
                                    <img src="http://demo.zytheme.com/hairy/assets/images/shop/thumb/1.jpg"
                                        alt="product" />
                                </a>
                                <div class="product-desc">
                                    <div class="product-title">
                                        <a href="#">Gel Cream</a>
                                    </div>
                                    <div class="product-meta">
                                        <span>$7.52</span>
                                    </div>
                                </div>
                            </div>
                            <!-- .recent-product end -->

                            <!-- Product #2 -->
                            <div class="product clearfix">
                                <a href="#">
                                    <img src="http://demo.zytheme.com/hairy/assets/images/shop/thumb/2.jpg"
                                        alt="product" />
                                </a>
                                <div class="product-desc">
                                    <div class="product-title">
                                        <a href="#">Hair Dryer</a>
                                    </div>
                                    <div class="product-meta">
                                        <span>$35.00</span>
                                    </div>
                                </div>
                            </div>
                            <!-- .recent-product end -->

                            <!-- Product #3 -->
                            <div class="product clearfix">
                                <a href="#">
                                    <img src="http://demo.zytheme.com/hairy/assets/images/shop/thumb/3.jpg"
                                        alt="product" />
                                </a>
                                <div class="product-desc">
                                    <div class="product-title">
                                        <a href="#">Hair Brush</a>
                                    </div>
                                    <div class="product-meta">
                                        <span>$23.00</span>
                                    </div>
                                </div>
                            </div>
                            <!-- .recent-product end -->
                        </div>

                    </div>
                    <!-- .widget-recent end -->

                    <!-- Filter
                                                                                    ============================================= -->
                    <div class="widget widget-filter">
                        <div class="widget--title">
                            <h5>Pricing Filter</h5>
                        </div>
                        <div class="widget--content">
                            <div id="slider-range"></div>
                            <p>
                                <input type="text" id="amount" readonly>
                                <a class="btn btn--secondary btn--bordered btn--rounded" href="#">Filter</a>
                            </p>

                        </div>
                    </div>
                    <!-- .widget-filter end -->

                    <!-- Tag Clouds
                                                                                    ============================================= -->
                    <div class="widget widget-tags">
                        <div class="widget--title">
                            <h5>tag clouds</h5>
                        </div>
                        <div class="widget--content">
                            <a href="#">Hairstyle</a>
                            <a href="#">Shave</a>
                            <a href="#">Clipper</a>
                            <a href="#">Trim</a>
                            <a href="#">Cream</a>
                            <a href="#">Razor</a>
                        </div>
                    </div>
                    <!-- .widget-tags end -->
                </div>
                <!-- .col-md-3 end -->
                <div class="col-xs-12 col-sm-12 col-md-9">
                    <div class="row">
                        @foreach ($products as $product)
                            <div class="col-xs-12 col-sm-6 col-md-4 product-item">
                                <div class="product--img">
                                    <img src="http://demo.zytheme.com/hairy/assets/images/shop/grid/1.jpg" alt="Product" />
                                    <div class="product--hover">
                                        <div class="product--action">
                                            <a href="#"
                                                data-url="{{ route('product.add-to-cart', ['productId' => $product->id]) }}"
                                                class="add-to-cart">Add To Cart</a>
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
                        @endforeach

                    </div>
                    <!-- .row end -->
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 clearfix mt-50 text--center">
                            {{ $products->links() }}
                            {{-- <ul class="pagination">
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li>
                                    <a class="pagination-next" href="#" aria-label="Next">
                                        <span aria-hidden="true">next <i class="fa fa-angle-right"></i></span>
                                    </a>
                                </li>
                            </ul> --}}
                        </div>
                        <!-- .col-md-12 end -->
                    </div>
                    <!-- .row end -->
                </div>
                <!-- .col-md-9 end -->
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </section>
    <!-- #shop end -->
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
                                <h1>Shop Left Sidebar</h1>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <ol class="breadcrumb breadcrumb-bottom">
                            <li><a href="index-2.html">Home</a></li>
                            <li><a href="index-2.html">shop</a></li>
                            <li class="active">Shop Left Sidebar</li>
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
@section('js-custom')
    <script>
        $(document).ready(function() {
            $('.add-to-cart').on('click', function(event) {
                event.preventDefault();
                var url = $(this).data('url');
                $.ajax({
                    method: 'get',
                    url: url,
                    success: function(response) {
                        console.log(response);
                        Swal.fire({
                            icon: 'success',
                            // title: 'Notification',
                            text: response.message,
                        });
                        $('#total-items-cart').html(response.total_items);
                        $('#total-price-cart').html('$' + response.total_price.toFixed(2)
                            .replace(
                                /(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
                    }
                });
            });
        });
    </script>
@endsection
