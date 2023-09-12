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
                <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('./img/company-logo.png') }}" alt=""/></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active">
                        <a href="{{ route('home') }}">{{ __('navbar.home') }}</a>
                    </li>
                    <li class="">
                        <a href="{{ route('cars') }}">{{ __('navbar.cars') }}</a>
                    </li>
                    <li class="">
                        <a href="/blog">{{ __('navbar.blog') }}</a>
                    </li>
                    <li class="">
                        <a href="/contact ">{{ __('navbar.contact') }}</a>
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
            <div class="container">
                <div class="rq-title-container bredcrumb-title small">
                    <h2 class="rq-title">Checkout</h2>
                    <ol class="breadcrumb rq-subtitle">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Shopping Cart</a></li>
                        <li class="active">Checkout</li>
                    </ol>
                </div> <!-- end .rq-title-container -->
                <div class="rq-checkout-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="panel-group" id="checkout-accordion" role="tablist" aria-multiselectable="true">
                                @if(auth()->check())
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="checkout-method-heading">
                                            <h4 class="panel-title">
                                                <a role="button" data-toggle="collapse" data-parent="#checkout-accordion" href="#checkout-method" aria-expanded="true" aria-controls="checkout-method">
                                                    Checkout Method
                                                </a>
                                            </h4>
                                        </div> <!-- end .panel-heading -->
                                        <div id="checkout-method" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="checkout-method-heading">
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="panel-subtitle">
                                                            <h5>Check as a guest or register</h5>
                                                            <p>Register with us for future convenience:</p>
                                                        </div>
                                                        <div class="rq-radiobox-content">
                                                            <span class="rq-radiobox">
                                                              <input type="radio" name="checkout-login-method" id="checkout-login-method" value="guest" checked>
                                                              <label for="checkout-login-method">Check as guest</label>
                                                            </span>
                                                                                <span class="rq-radiobox">
                                                              <input checked type="radio" name="checkout-login-method" id="checkout-login-method-two" value="guest">
                                                              <label for="checkout-login-method-two">Register</label>
                                                            </span>
                                                        </div>
                                                        <div class="panel-subtitle">
                                                            <h5>Register and save time !</h5>
                                                            <p>Register with us for future convenience:</p>
                                                        </div>

                                                        <div class="widget-categories">
                                                            <ul>
                                                                <li>Fast and easy check out</li>
                                                                <li>Easy access to your order history and status</li>
                                                            </ul>
                                                        </div>
                                                        <div class="guest-btn">
                                                            <button class="rq-btn rq-btn-transparent">Continue</button>
                                                        </div>
                                                    </div> <!-- end .col-md-6 -->
                                                    <div class="col-md-6">
                                                        <div class="panel-subtitle">
                                                            <h5>Already Registered ?</h5>
                                                            <p>Please login below :</p>
                                                        </div>
                                                        <form action="#" class="rq-checkout-form">
                                                            <div class="form-group">
                                                                <label for="login-email">Email Address <span class="required">*</span></label>
                                                                <input type="email" class="rq-form-control small" id="login-email" placeholder="Email">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="login-password">Password <span class="required">*</span></label>
                                                                <input type="password" class="rq-form-control small" id="login-password" placeholder="Password">
                                                            </div>
                                                            <span class="required">* Required Fields</span>
                                                            <div class="login-button">
                                                                <a href="#">Forgot Your Password ?</a>
                                                                <button type="submit" class="rq-btn rq-btn-primary btn-large">Log In</button>
                                                            </div>
                                                        </form>
                                                    </div> <!-- end .col-md-6 -->
                                                </div>
                                            </div> <!-- end .panel-body -->
                                        </div> <!-- end .panel-collapse -->
                                    </div> <!-- end .panel-default -->
                                @endif
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="billing-information-heading">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#checkout-accordion" href="#billing-information" aria-expanded="true" aria-controls="billing-information">
                                                Billing Information
                                            </a>
                                        </h4>
                                    </div> <!-- end .panel-heading -->
                                    <div id="billing-information" class="panel-collapse collapse" role="tabpanel" aria-labelledby="billing-information-heading">
                                        <div class="panel-body">
                                            <div class="rq-login-form no-border">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <input type="text" id="billing-name" class="rq-form-control reverse" name="billing-name" placeholder="name and surname" required>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text" id="billing-address" class="rq-form-control reverse" name="billing-address" placeholder="Address" required>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text" id="billing-city" name="billing-city" class="rq-form-control reverse" placeholder="City" required>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text" id="billing-zip" name="billing-zip" class="rq-form-control reverse" placeholder="Zip Code" required>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="tel" id="billing-phone" name="billing-phone" class="rq-form-control reverse" placeholder="Phone" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- end .panel-body -->
                                    </div> <!-- end .panel-collapse -->
                                </div> <!-- end .panel-default -->
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="payment-information-heading">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#checkout-accordion" href="#payment-information" aria-expanded="true" aria-controls="payment-information">
                                                Payment Information
                                            </a>
                                        </h4>
                                    </div> <!-- end .panel-heading -->
                                    <div id="payment-information" class="panel-collapse collapse" role="tabpanel" aria-labelledby="payment-information-heading">
                                        <div class="panel-body">
                                            <div class="rq-login-form no-border">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <input type="text" id="credit-card" name="credit-card" class="rq-form-control reverse"  placeholder="Credit Card" required>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text" id="expiration-date" name="expiration-date" class="rq-form-control reverse"  placeholder="Expiration date" required>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text"  id="cvv" name="cvv"  class="rq-form-control reverse" placeholder="CVV" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- end .panel-body -->
                                    </div> <!-- end .panel-collapse -->
                                </div> <!-- end .panel-default -->
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="order-review-heading">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#checkout-accordion" href="#order-review" aria-expanded="true" aria-controls="order-review">
                                                Order Review
                                            </a>
                                        </h4>
                                    </div> <!-- end .panel-heading -->
                                    <div id="order-review" class="panel-collapse collapse" role="tabpanel" aria-labelledby="order-review-heading">
                                        <div class="panel-body">
                                            <div class="row">
                                                {{ $car->desc }}
                                            </div>
                                            <div class="car-search">
                                                <div class="car-search">
                                                    <div class="rq-search-container">
                                                        <div class="rq-search-single">
                                                            <div class="rq-search-content">
                                                                <span class="rq-search-heading">Pick Up Location</span>
                                                                <select name="pickuo_location" class="category-option">
                                                                    <option selected value="{{ $car->location->id ?? ''}}" >{{ $car->location->name ?? ''}}</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="rq-search-single">
                                                            <div class="rq-search-content">
                                                                <span class="rq-search-heading">Return Location</span>
                                                                <select name="return_location" value="" class="category-option">
                                                                    <option value="0">Pick a location</option>
                                                                    @isset($return_location)
                                                                        <option selected value="{{ $return_location->id }}">{{ $return_location->name }}</option>
                                                                    @endisset
                                                                    @isset($locations)
                                                                        @foreach($locations as $location)
                                                                            <option value="{{ $location->id }}">{{ $location->name }}</option>
                                                                        @endforeach
                                                                    @endisset
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="rq-search-single">
                                                            <div class="rq-search-content">
                                                                <span class="rq-search-heading">Pick up</span>
                                                                <input type="text" name="pickup_date" value="{{ $request->pickup_date }}" class="rq-form-element datepicker" id="startdate" placeholder="Pick up date"/>
                                                                <i class="ion-chevron-down datepicker-arrow"></i>
                                                            </div>
                                                        </div>
                                                        <div class="rq-search-single">
                                                            <div class="rq-search-content">
                                                                <span class="rq-search-heading">Return</span>
                                                                <input type="text" name="return_date" value="{{ $request->return_date }}" class="rq-form-element" id="enddate" placeholder="Return date"/>
                                                                <i class="ion-chevron-down datepicker-arrow"></i>
                                                            </div>
                                                        </div>
                                                        <div class="rq-search-single search-btn">
                                                            <div class="rq-search-content">
                                                                <button type="submit" class="rq-btn rq-btn-primary fluid-btn">Book Now <i class="arrow_right"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- end .panel-body -->
                                    </div> <!-- end .panel-collapse -->
                                </div> <!-- end .panel-default -->
                            </div> <!-- end #accordion -->
                        </div> <!-- end .row -->
                    </div> <!-- end .container -->
                </div> <!-- end .rq-element-wrapper -->
            </div> <!-- end .container -->
        </div> <!-- end .rq-content-block -->
    </div> <!-- end .rq-page-content -->
@endsection
