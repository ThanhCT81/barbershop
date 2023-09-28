@extends('client.layout.master')
@section('page-title')
    <!-- Page Title #1
    ============================================= -->
    <section id="page-title" class="page-title bg-overlay bg-overlay-dark bg-parallax">
        <div class="bg-section">
            <img src="http://demo.zytheme.com/hairy/assets/images/page-titles/1.jpg" alt="Background" />
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                    <div class="title text-center">
                        <div class="title--content">
                            <div class="title--heading">
                                <h1>Blog Single</h1>
                            </div>
                            <ol class="breadcrumb">
                                <li><a href="index-2.html">Home</a></li>
                                <li class="active">Blog</li>
                            </ol>
                        </div>
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
@section('content')
    <!-- Blog Single
        ============================================= -->
    <section id="blog" class="blog blog-single pb-50">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8">
                    <!-- Blog Entry -->
                    <div class="blog-entry">
                        <div class="entry--img">
                            <a href="#">
                                <img src="http://demo.zytheme.com/hairy/assets/images/blog/single/1.jpg"
                                    alt="entry image" />
                            </a>
                        </div>
                        <div class="entry--meta">
                            <span>By: <a href="#">Steve Martin</a></span>
                            <span>Jan 20, 2017</span>
                            <span><a href="#">barbers</a></span>
                        </div>
                        <div class="entry--title">
                            <h3><a href="#">Foil shaver versus clippers & trimmers</a></h3>
                        </div>
                        <div class="entry--content">
                            <p>
                                Razor shaving at home is a tradition that most men still abide by and has become
                                even a bit of a ritual for men, when it is passed on from generation to generation.
                                Each man will have their own preference of what shaving machine they will use,
                                whether it is a straight razor, safety razor or a cartridge razor.
                            </p>
                            <blockquote class="blockquote blockquote-1">“ The key is to find the hair remover tool
                                that suits your needs and will make taming your facial hair easy, while looking good
                                – obviously! Using a foil shaver or a clippers/trimmers are both effective ways. ”
                            </blockquote>
                            <p>
                                The foil shaver made its appearance on to the barbering circuit in the 80’s when
                                popular brand Remington were the first brand to introduce this powerful shaving tool
                                onto the market.
                            </p>
                            <p>
                                The purpose of the foil razor was to get really close to your face without having to
                                use a razor blade. It was designed to give more flexibility to men who lead busy
                                lives – with a foil shaver, you don’t need to apply oils and creams onto your skin,
                                as you can shave on dry skin when using a foil shaver.
                            </p>
                        </div>
                        <div class="entry--share">
                            <span>share: </span>
                            <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                            <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                            <a class="google" href="#"><i class="fa fa-google-plus"></i></a>
                            <a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a>
                        </div>
                        <!-- .entry-share end -->
                    </div>
                    <!-- .blog-entry end -->

                    <div class="entry-prev-next clearfix">
                        <div class="entry-prev">
                            <div class="entry-prev-content">
                                <img src="http://demo.zytheme.com/hairy/assets/images/blog/thumb/1.jpg" alt="title" />
                                <div class="entry-desc">
                                    <p><i class="lnr lnr-arrow-left"></i> previous</p>
                                    <a href="#">The power of the barber shop shave</a>
                                </div>
                            </div>
                        </div>
                        <div class="entry-next">
                            <div class="entry-next-content">
                                <img src="http://demo.zytheme.com/hairy/assets/images/blog/thumb/2.jpg" alt="title" />
                                <div class="entry-desc">
                                    <p>next <i class="lnr lnr-arrow-right"></i></p>
                                    <a href="#">Men’s hairstyles for all face shapes</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- .entry-prev-next end -->
                    <hr class="mb-100">
                </div>
                <!-- .col-md-9 end -->
                <div class="col-xs-12 col-sm-12 col-md-4">
                    <div class="sidebar">
                        <!-- Search
        ============================================= -->
                        <div class="widget widget-search">
                            <div class="widget--content">
                                <form class="form-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search...">
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
                                        <a href="#">Barbers</a>
                                    </li>
                                    <li>
                                        <a href="#">New Styles</a>
                                    </li>
                                    <li>
                                        <a href="#">Haircut</a>
                                    </li>
                                    <li>
                                        <a href="#">News</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- .widget-categories end -->

                        <!-- Recent Posts
        ============================================= -->
                        <div class="widget widget-recent-posts">
                            <div class="widget--title">
                                <h5>recent posts</h5>
                            </div>
                            <div class="widget--content">
                                <div class="entry">
                                    <a href="#">
                                        <img src="http://demo.zytheme.com/hairy/assets/images/blog/thumb/5.jpg"
                                            alt="title" />
                                    </a>
                                    <div class="entry-desc">
                                        <div class="entry-title">
                                            <a href="#">Essential barbering tips you need to know before start</a>
                                        </div>
                                        <div class="entry-meta">
                                            <span><a href="#">Nov 09, 2017</a></span>
                                            <span><a href="#">barbers</a></span>
                                        </div>
                                    </div>
                                </div>
                                <!-- .recent-entry end -->

                                <div class="entry">
                                    <a href="#">
                                        <img src="http://demo.zytheme.com/hairy/assets/images/blog/thumb/4.jpg"
                                            alt="title" />
                                    </a>
                                    <div class="entry-desc">
                                        <div class="entry-title">
                                            <a href="#">What are the 360 waves? and how you can get them</a>
                                        </div>
                                        <div class="entry-meta">
                                            <span><a href="#">Oct 30, 2017</a></span>
                                            <span><a href="#">barbers</a></span>
                                        </div>
                                    </div>
                                </div>
                                <!-- .recent-entry end -->

                                <div class="entry">
                                    <a href="#">
                                        <img src="http://demo.zytheme.com/hairy/assets/images/blog/thumb/3.jpg"
                                            alt="title" />
                                    </a>
                                    <div class="entry-desc">
                                        <div class="entry-title">
                                            <a href="#">Discover what is the best haircut for your face?</a>
                                        </div>
                                        <div class="entry-meta">
                                            <span><a href="#">Oct 19, 2017</a></span>
                                            <span><a href="#">barbers</a></span>
                                        </div>
                                    </div>
                                </div>
                                <!-- .recent-entry end -->
                            </div>
                        </div>
                        <!-- .widget-recent end -->

                        <!-- Instagram Feed
        ============================================= -->
                        <div class="widget widget-instagram">
                            <div class="widget--title">
                                <h5>Instagram feed</h5>
                            </div>
                            <div class="widget--content">
                                <div id="instafeedSidebar" class="instafeed" data-insta-number="8"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <!-- .widget-instagram end -->

                        <!-- Tag Clouds
        ============================================= -->
                        <div class="widget widget-tags">
                            <div class="widget--title">
                                <h5>Tags</h5>
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
                </div>
                <!-- .col-md-4 end -->

                <div class="col-xs-12 col-md-12">
                    <div class="entry-widget entry-related clearfix">
                        <div class="entry-widget-title">
                            <h4>related posts</h4>
                        </div>
                        <div class="entry-widget-content">
                            <div class="row">
                                <!-- Related Post #1 -->
                                <div class="col-xs-12 col-sm-4 col-md-4 entry">
                                    <div class="blog-entry">
                                        <div class="entry--img">
                                            <a href="#">
                                                <img src="http://demo.zytheme.com/hairy/assets/images/blog/grid/7.jpg"
                                                    alt="entry image" />
                                            </a>
                                            <div class="entry--overlay">
                                                <a href="#"><i class="fa fa-chain"></i></a>
                                            </div>
                                        </div>
                                        <div class="entry--content">
                                            <div class="entry--meta">
                                                <span>Sep 29, 2017</span>
                                                <span><a href="#">Styles</a></span>
                                            </div>
                                            <div class="entry--title">
                                                <h4><a href="#">What you should know about haircuts? </a></h4>
                                            </div>
                                            <div class="entry--bio">
                                                Most people who go to the barbershop for haircuts do not understand
                                                a lot about the barbershop or its..
                                            </div>
                                            <div class="entry--more">
                                                <a href="#">read more <i class="fa fa-angle-double-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- .blog-entry end -->
                                </div>

                                <!-- Related Post #2 -->
                                <div class="col-xs-12 col-sm-4 col-md-4 entry">
                                    <div class="blog-entry">
                                        <div class="entry--img">
                                            <a href="#">
                                                <img src="http://demo.zytheme.com/hairy/assets/images/blog/grid/8.jpg"
                                                    alt="entry image" />
                                            </a>
                                            <div class="entry--overlay">
                                                <a href="#"><i class="fa fa-chain"></i></a>
                                            </div>
                                        </div>
                                        <div class="entry--content">
                                            <div class="entry--meta">
                                                <span>Sep 24, 2017</span>
                                                <span>News</span>
                                            </div>
                                            <div class="entry--title">
                                                <h4><a href="#">It’s the hot towel treatment!</a></h4>
                                            </div>
                                            <div class="entry--bio">
                                                One of the most well kept secrets regarding the barber shop is the
                                                shave. People go to the barber shop..
                                            </div>
                                            <div class="entry--more">
                                                <a href="#">read more <i class="fa fa-angle-double-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- .blog-entry end -->
                                </div>
                                <!-- Related Post #3 -->
                                <div class="col-xs-12 col-sm-4 col-md-4 entry">
                                    <div class="blog-entry">
                                        <div class="entry--img">
                                            <a href="#">
                                                <img src="http://demo.zytheme.com/hairy/assets/images/blog/grid/9.jpg"
                                                    alt="entry image" />
                                            </a>
                                            <div class="entry--overlay">
                                                <a href="#"><i class="fa fa-chain"></i></a>
                                            </div>
                                        </div>
                                        <div class="entry--content">
                                            <div class="entry--meta">
                                                <span>Sep 15, 2017</span>
                                                <span><a href="#">barbers</a></span>
                                            </div>
                                            <div class="entry--title">
                                                <h4><a href="#">Barbers are trained professionals</a></h4>
                                            </div>
                                            <div class="entry--bio">
                                                While many people go to the barbershop on a regular basis, very few
                                                people realize how much training..
                                            </div>
                                            <div class="entry--more">
                                                <a href="#">read more <i class="fa fa-angle-double-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- .blog-entry end -->
                                </div>

                            </div>
                            <!-- .row end -->
                        </div>
                    </div>
                    <!-- .entry-related end -->
                </div>
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </section>
    <!-- #blog end -->
@endsection
