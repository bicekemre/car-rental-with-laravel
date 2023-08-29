@extends('layouts.master')
@section('navbar')
    <nav class="navbar navbar-default" id="sticker">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ route('home') }}"><img src="./img/company-logo.png" alt=""/></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active">
                        <a href="/">{{ __('navbar.home') }}</a>
                    </li>
                    <li class="">
                        <a href="/cars">{{ __('navbar.cars') }}</a>
                    </li>
                    <li class="">
                        <a href="/blog">{{ __('navbar.blog') }}</a>
                    </li>
                    <li class="">
                        <a href="/contact">{{ __('navbar.contact') }}</a>
                    </li>
                    <li class="">
                        <a href="/about-us">{{ __('navbar.about-us') }}</a>
                    </li>
                    @if(auth()->user())
                        <li class="">
                            <a href="{{ route('profile') }}">{{ __('navbar.profile') }}</a>
                        </li>
                        <li class="">
                            <a href="{{ route('logout') }}">{{ __('navbar.log-out') }}</a>
                        </li>
                    @else
                    <li class="login-register-link right-side-link"><a href="{{ route('registration') }}">
                            <i class="icon_lock-open_alt"></i>Login</a>
                    </li>
                    @endif
                    <li class="dropdown right-side-link">
                        <a href="/en/" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-haspopup="true" aria-expanded="false">ENG<span class="ion-chevron-down"></span></a>
                        <ul class="dropdown-menu with-language">
                            <li><a href="/tr/">TR</a></li>
                            <li><a href="#">De</a></li>
                        </ul>
                    </li>
                    <li class="dropdown right-side-link last">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-haspopup="true" aria-expanded="false">USD<span class="ion-chevron-down"></span></a>
                        <ul class="dropdown-menu with-language">
                            <li><a href="#">USD</a></li>
                            <li><a href="#">Eur</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
@endsection
@section('content')
    <div class="rq-page-content">
        <div class="rq-content-block">
            <div class="rq-title-container bredcrumb-title small">
                <div class="container">
                    <h2 class="rq-title">Register</h2>
                    <ol class="breadcrumb rq-subtitle">
                        <li><a href="#">Home</a></li>
                        <li class="active">Register</li>
                    </ol>
                </div>
            </div>
            <div class="rq-registration-content-single"> <!-- start of login form portion -->
                <div class="container">
                    <h4>Login your account</h4>
                    <p class="subtitle">Login to your accounts to discover the great features in this template</p>
                    @error('email')
                    <div class="alert">Invalid credentials</div>
                    @enderror
                    <div class="rq-login-form">
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-5">
                                    <input type="email" name="email" class="rq-form-control" placeholder="Your email">
                                </div>
                                <div class="col-md-5">
                                    <input type="password" name="password" class="rq-form-control"  placeholder="Your password">
                                </div>
                                <div class="col-md-2">
                                    <button type="submit" class="rq-btn rq-btn-primary fluid border-radius">Login <i class="arrow_right"></i></button>
                                </div>
                                <div class="col-md-12">
                                    <div class="rq-checkbox">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="remember-me">
                        <span class="rq-checkbox">
                          <input type="checkbox" name="remember-me" id="remember-me">
                          <label for="remember-me">Keep me loged in</label>
                        </span>
                                        <span class="forgotpass">
                          <a href="#">Forgot your password ?</a>
                        </span>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div> <!-- end login div -->
                </div>
            </div> <!-- end of login form portion -->
            <div class="rq-registration-content-single small-bottom-margin"> <!-- start of registration portion -->
                <div class="container">
                    <div class="rq-login-form no-border">
                        <h4>Don't have an account! Register now </h4>
                        <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                        <h5>Sign Up TODAY AND YOU ` LL BE ABLE TO FOLLOWING</h5>
                        <ul class="rq-feature-list">
                            <li>Register and access all</li>
                            <li>Change your profile anytime</li>
                            <li>Keep a records of all your payment</li>
                            <li>Create your own Add at protfolio</li>
                            <li>Track your payment easily at your profile page</li>
                            <li>Quick registration for facebook, twitter and with Google+</li>
                        </ul>
                        <form class="form-horizontal"  action="{{ route('register') }}" method="post" >
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="text" name="name" class="rq-form-control reverse" placeholder="Name" required>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" name="last_name" class="rq-form-control reverse" placeholder="Last Name" required>
                                </div>
                                <div class="col-md-4">
                                    <input type="password" name="password" class="rq-form-control reverse" placeholder="Password" required>
                                </div>
                                <div class="col-md-4">
                                    <input type="email" name="email" class="rq-form-control reverse" placeholder="Email Address" required>
                                </div>
                                <div class="col-md-4">
                                    <input type="number" name="phone" class="rq-form-control reverse" placeholder="Phone" required>
                                </div>
                                <div class="col-md-4">
                                    <input type="password" name="re-password" class="rq-form-control reverse" placeholder="Re - Password" required>
                                </div>
                                <div class="col-md-12">
                                    <div class="register-button">
                                        <button type="submit" class="rq-btn rq-btn-primary border-radius">Register <i class="arrow_right"></i></button>
                                    </div>
                                </div>
                            </div> <!-- end of registration section -->
                        </form>
                    </div>
                </div>
            </div><!--  end of registration form portin -->
        </div>
    </div>
@endsection
