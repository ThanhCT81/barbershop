@extends('client.layout.master')
@section('content')
    <!-- Booking
        ============================================= -->
    <section id="booking" class="booking bg-white">
        <div class="container">
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                    <div class="heading heading-2 mb-80 text--center">
                        <h2 class="heading--title">Book Online</h2>
                        <p class="heading--desc">Duis aute irure dolor in reprehenderit volupte velit esse cillum dolore eu
                            fugiat pariatursint occaecat cupidatat non proident culpa.</p>
                        <div class="divider--line"></div>
                    </div>
                </div>
                <!-- .col-md-6 end -->
            </div>
            <!-- .row end -->
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1">
                    <div class="booking-form">
                        <form class="mb-0">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <input type="text" class="form-control" name="contact-name" id="name"
                                        placeholder="Your Name">
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <input type="email" class="form-control" name="contact-email" id="email"
                                        placeholder="Email">
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="contact-name" id="phone"
                                        placeholder="Phone">
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <div class="form-select">
                                        <i class="fa fa-angle-down"></i>
                                        <select class="form-control" name="services" id="services">
                                            <option value="2">Select Service</option>
                                            <option value="3">Service 1</option>
                                            <option value="4">Service 2</option>
                                            <option value="5">Service 3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <div class="form-select">
                                        <i class="fa fa-angle-down"></i>
                                        <select class="form-control" name="date" id="date">
                                            <option value="">Date</option>
                                            <option value="March 23">March 23, 2017</option>
                                            <option value="March 24">March 24, 2017</option>
                                            <option value="March 25">March 25, 2017</option>
                                            <option value="March 26">March 26, 2017</option>
                                            <option value="March 27">March 27, 2017</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <div class="form-select">
                                        <i class="fa fa-angle-down"></i>
                                        <select class="form-control" name="time" id="time">
                                            <option value="">Time</option>
                                            <option value="8:00">8:00 PM</option>
                                            <option value="9:00">9:00 PM</option>
                                            <option value="10:00">10:00 PM</option>
                                            <option value="11:00">11:00 PM</option>
                                            <option value="12:00">12:00 AM</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <textarea class="form-control" name="contact-message" id="message" rows="3"
                                        placeholder="Add your notes (optional)"></textarea>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <input type="submit" value="Book Now" name="submit"
                                        class="btn btn--secondary btn--rounded">
                                </div>
                            </div>
                            <!-- .row end -->
                        </form>
                        <!-- form end -->
                    </div>
                    <!-- .booking-form end -->
                </div>
                <!-- .col-md-8 end -->
            </div>
            <!-- .row end -->
            <div class="divider--shape-1down"></div>
        </div>
        <!-- .container end -->
    </section>
    <!-- #booking end -->
@endsection
@section('page-title')
    <!-- Page Title #1
    ============================================= -->
    <section id="page-title" class="page-title bg-overlay bg-overlay-dark bg-parallax">
        <div class="bg-section">
            <img src="http://demo.zytheme.com/hairy/assets/images/page-titles/8.jpg" alt="Background" />
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="title title-1 text-center">
                        <div class="title--heading">
                            <h1>Book Online</h1>
                        </div>
                        <div class="clearfix"></div>
                        <ol class="breadcrumb">
                            <li><a href="index-3.html">Home</a></li>
                            <li class="active">Book Online</li>
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
