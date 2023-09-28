@extends('client.layout.master')
@section('content')
    <section class="login-form">
        <div class="container" id="container">
            <div class="form-container log-in-container">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <h1>Login</h1>
                    <div class="social-container">
                        <a href="#" class="social"><i class="fa fa-facebook fa-2x"></i></a>
                        <a href="#" class="social"><i class="fab fa fa-twitter fa-2x"></i></a>
                    </div>
                    <span>or use your account</span>
                    <input type="email" name="email" id="email" placeholder="Email" />
                    <input type="password" name="password" id="password" placeholder="Password" />
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}">Forgot your password?</a>
                    @endif
                    <button type="submit">Log In</button>
                </form>
            </div>
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-right">
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
@section('page-title')
    <section id="page-title" class="page-title bg-overlay bg-overlay-dark bg-parallax">
        <div class="bg-section">
            <img src="http://demo.zytheme.com/hairy/assets/images/page-titles/8.jpg" alt="Background" />
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="title title-1 text-center">
                        <div class="title--heading">
                            <h1>Login</h1>
                        </div>
                        <div class="clearfix"></div>
                        <ol class="breadcrumb">
                            <li><a href="index-3.html">Home</a></li>
                            <li class="active">Login</li>
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
@endsection
