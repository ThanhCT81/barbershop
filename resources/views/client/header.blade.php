<header id="navbar-spy" class="header header-topbar header-transparent header-fixed">
    <div id="top-bar" class="top-bar">
        <div class="container">
            <div class="bottom-bar-border">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 top--contact hidden-xs">
                        <ul class="list-inline mb-0 ">
                            <li>
                                <i class="lnr lnr-clock"></i><span>Mon - Fri 9.00 : 17.00</span>
                            </li>
                            <li>
                                <i class="lnr lnr-phone-handset"></i> <span>(04) 491 570 110</span>
                            </li>
                        </ul>
                    </div><!-- .col-md-6 end -->
                    <div class="col-xs-12 col-sm-6 col-md-6 top--info text-right text-center-xs">
                        @if (Route::has('login'))
                            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                @auth
                                    <a href="{{ url('/dashboard') }}"
                                        class="text-sm text-gray-700 light:text-gray-500 underline">Dashboard</a>
                                @else
                                    <span class="top--login"><i class="lnr lnr-exit"></i>
                                        <a href="{{ route('login') }}"
                                            class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
                                    </span>
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}"
                                            class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                    @endif
                                @endauth
                            </div>
                        @endif
                        <span class="top--social">
                            <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                            <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                            <a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
                            <a class="instagram" href="#"><i class="fa fa-instagram"></i></a>
                        </span>
                    </div><!-- .col-md-6 end -->
                </div>
            </div>
        </div>
    </div>
    <nav id="primary-menu" class="navbar navbar-fixed-top">
        <div class="container">
            <div class="">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="logo" href="index-2.html">
                        <img class="logo-light" src="http://demo.zytheme.com/hairy/assets/images/logo/logo-light.png"
                            alt="Hairy Logo">
                        <img class="logo-dark" src="http://demo.zytheme.com/hairy/assets/images/logo/logo-light.png"
                            alt="Hairy Logo">
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse pull-right" id="navbar-collapse-1">
                    <ul class="nav navbar-nav nav-pos-right nav-bordered-right snavbar-left">
                        <!-- Home Menu -->
                        <li class="has-dropdown active">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle menu-item">home</a>
                            <ul class="dropdown-menu">
                                <li><a href="index-2.html">homepage 1</a></li>
                                <li><a href="homepage-2.html">homepage 2</a></li>
                                <li><a href="homepage-3.html">homepage 3</a></li>
                                <li><a href="landing.html">landing</a></li>
                            </ul>
                        </li>
                        <!-- li end -->
                        <!-- Pages Menu -->
                        <li class="has-dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle link-hover"
                                data-hover="pages">pages</a>
                            <ul class="dropdown-menu">
                                <li><a href="page-about-us.html">about us</a></li>
                                <li><a href="page-book-online.html">book online</a></li>
                                <li><a href="page-our-staff.html">our staff</a></li>
                                <li><a href="page-services.html">our services</a></li>
                                <li><a href="page-contact.html">contact us</a></li>
                                <li><a href="page-404.html">404</a></li>
                            </ul>
                        </li>
                        <!-- li end -->
                        <!-- Features Menu-->
                        <li class="has-dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle menu-item">elements</a>
                            <ul class="dropdown-menu">
                                <li><a href="elements-buttons.html">buttons</a></li>
                                <li><a href="elements-columns-grids.html">grid system</a></li>
                                <li><a href="elements-typography.html">typography</a></li>
                                <li><a href="elements-form.html">forms</a></li>
                                <li><a href="elements-heading.html">heading</a></li>
                            </ul>
                        </li>
                        <!-- li end -->
                        <!-- Gallery Menu-->
                        <li class="has-dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle menu-item">Gallery</a>
                            <ul class="dropdown-menu">
                                <li><a href="gallery-3cols.html">gallery 3 columns</a></li>
                                <li><a href="gallery-4cols.html">gallery 4 columns</a></li>
                                <li><a href="gallery-masonry.html">gallery masonry</a></li>
                                <li><a href="gallery-single-images.html">single images</a></li>
                                <li><a href="gallery-single-slider.html">single slider</a></li>
                            </ul>
                        </li>
                        <!-- li end -->
                        <!-- Blog Menu-->
                        <li class="has-dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle menu-item">Blog</a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-submenu">
                                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">blog
                                        grid</a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="blog-grid.html">fullwidth</a>
                                        </li>
                                        <li>
                                            <a href="blog-grid-sidebar-left.html">left sidebar</a>
                                        </li>
                                        <li>
                                            <a href="blog-grid-sidebar-right.html">right sidebar</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">blog
                                        masonry</a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="blog-masonry.html">fullwidth</a>
                                        </li>
                                        <li>
                                            <a href="blog-masonry-sidebar-left.html">left sidebar</a>
                                        </li>
                                        <li>
                                            <a href="blog-masonry-sidebar-right.html">right sidebar</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">blog
                                        standard</a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="blog-standard-sidebar-left.html">left sidebar</a>
                                        </li>
                                        <li>
                                            <a href="blog-standard-sidebar-right.html">right sidebar</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="blog-single.html">blog single</a>
                                </li>
                            </ul>
                        </li>
                        <!-- li end -->
                        <!-- shop Menu -->
                        <li class="has-dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle menu-item">shop</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="shop-3columns.html">shop 3 columns</a>
                                </li>
                                <li>
                                    <a href="shop-4columns.html">shop 4 columns</a>
                                </li>
                                <li>
                                    <a href="shop-sidebar-left.html">shop products LS</a>
                                </li>
                                <li>
                                    <a href="shop-sidebar-right.html">shop products RS</a>
                                </li>
                                <li>
                                    <a href="shop-single.html">shop single</a>
                                </li>
                                <li>
                                    <a href="shop-cart.html">shop cart</a>
                                </li>
                                <li>
                                    <a href="shop-checkout.html">shop checkout</a>
                                </li>
                            </ul>
                        </li>
                        <!-- li end -->
                    </ul>
                    <!-- Module Cart -->
                    <div class="module module-cart pull-left">
                        <div class="module-icon cart-icon">
                            <i class="lnr lnr-store"></i>
                            <span class="title">shop cart</span>
                            <label id="total-items-cart"
                                class="module-label">{{ count(session()->get('cart', [])) }}</label>
                        </div>
                        <div class="module-content module-box cart-box">
                            <div class="cart-overview">
                                @php
                                    $cart = session()->get('cart', []);
                                    $total = 0;
                                    foreach ($cart as $item) {
                                        $total += $item['price'] * $item['qty'];
                                    }
                                @endphp
                                <ul class="list-unstyled">
                                    @foreach ($cart as $item)
                                        <li>
                                            <a href="#">
                                                <img class="img-responsive"
                                                    src="http://demo.zytheme.com/hairy/assets/images/shop/thumb/1.jpg"
                                                    alt="product" />
                                            </a>
                                            <div class="product-meta">
                                                <h5 class="product-title"><a href="#">{{ $item['name'] }}</a>
                                                </h5>
                                                <p class="product-price">{{ $item['qty'] }} ×
                                                    ${{ number_format($item['price'], 2) }}</p>
                                            </div>
                                            <a class="cart-cancel" href="#">cancel</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="cart-total">
                                <div class="total-desc">
                                    Subtotal:
                                </div>
                                <div id="total-price-cart" class="total-price">
                                    ${{ number_format($total, 2) }}
                                </div>
                            </div>
                            <div class="clearfix">
                            </div>
                            <div class="cart--control">
                                <a class="btn btn--primary btn--bordered btn--rounded btn--block"
                                    href="{{ route('cart.index') }}">View
                                    Cart & Checkout</a>
                            </div>
                        </div>
                    </div>
                    <!-- .module-cart end -->
                    <!-- Module Search -->
                    <div class="module module-search pull-left">
                        <div class="module-icon search-icon">
                            <i class="lnr lnr-magnifier"></i>
                            <span class="title">search</span>
                        </div>
                        <div class="module-content module-fullscreen module--search-box">
                            <div class="pos-vertical-center">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                                            <form class="form-search">
                                                <input type="text" class="form-control" placeholder="Search..">
                                                <button class="btn" type="button"><i
                                                        class="lnr lnr-magnifier"></i></button>
                                            </form>
                                            <!-- .form-search end -->
                                        </div>
                                        <!-- .col-md-8 end -->
                                    </div>
                                    <!-- .row end -->
                                </div>
                                <!-- .container end -->
                            </div>
                            <a class="module-cancel" href="#"><i class="lnr lnr-cross"></i></a>
                        </div>
                    </div>
                    <!-- .module-search end -->
                    <!-- Module Cart -->
                    <div class="module module-cart pull-left">
                        <div class="module-icon">
                            <a class="btn btn--white btn--bordered btn--rounded" href="#">Book
                                Online</a>
                        </div>
                    </div>
                    <!-- .module-cart end -->
                </div>
                <!-- /.navbar-collapse -->
            </div>
        </div>
        <!-- /.container-fluid -->
    </nav>

</header>
