@extends('layouts.master')
@section('header')
    <div class="header-body" style="background: url({{ asset('./img/turbo-banner-two.jpg') }}) top center no-repeat; background-size: 100% 65%;">
        <div class="container">
            <h1>Welcome <strong>Turbo</strong></h1>
            <p>Looking to rent a car for an upcoming vacation or business trip? In TURBO, we make renting
                a car seamless so you can get right on your way. </p>
            <div class="rq-counting-list home-two-version">
                <ul class="list-unstyled">
                    <li>
                        <span class="count-result"  data-from="25" data-to="12460" data-speed="5000" data-refresh-interval="50"></span>
                        <span class="count-category">User access</span>
                    </li>
                    <li>
                        <span class="count-result"  data-from="25" data-to="12460" data-speed="5000" data-refresh-interval="50"></span>
                        <span class="count-category">Cars</span>
                    </li>
                    <li>
                        <span class="count-result" data-from="25" data-to="12460" data-speed="5000" data-refresh-interval="50"></span>
                        <span class="count-category">Reviews</span>
                    </li>
                </ul>
            </div>
            <div class="group-car-image">
                <img src="{{ asset('img/banner-group-car.png') }}" alt="">
            </div>
            <form action="{{ route('list.cars') }}" method="GET" >
                <input type="hidden" name="q" value="true">
                <div class="">
                    <div class="rq-search-container">
                            <div class="rq-search-single">
                                <div class="rq-search-content">
                                    <span class="rq-search-heading">Location</span>
                                    <select name="location_id" class="category-option">
                                        <option value="0">Pick a location</option>
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
                                    <input type="text" name="pickup_date" class="rq-form-element datepicker" id="startdate" placeholder="Pick up date"/>
                                    <i class="ion-chevron-down datepicker-arrow"></i>
                                </div>
                            </div>
                            <div class="rq-search-single">
                                <div class="rq-search-content">
                                    <span class="rq-search-heading">Return</span>
                                    <input type="text" name="return_date" class="rq-form-element" id="enddate" placeholder="Return date"/>
                                    <i class="ion-chevron-down datepicker-arrow"></i>
                                </div>
                            </div>
                            <div class="rq-search-single">
                                <div class="rq-search-content last-child">
                                    <span class="rq-search-heading">Car Type</span>
                                    <select name="car_type" class="category-option">
                                        <option value="SUV">SUV</option>
                                        <option value="Electric">Electric</option>
                                        <option value="Sedan">Sedan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="rq-search-single search-btn">
                                <div class="rq-search-content">
                                    <button type="submit" class="rq-btn rq-btn-primary fluid-btn">Search <i class="arrow_right"></i></button>
                                </div>
                            </div>
                    </div> <!-- / .search-container -->
                </div>
            </form>
        </div>
    </div> <!-- /.header-body -->

@endsection
@section('navbar')
    <nav class="navbar navbar-default home-two-nav">
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
                <a class="navbar-brand" href="#"><img src="{{ asset('./img/home-two-logo.png') }}" alt=""/></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
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
                        <a href="/about-us">{{ __('navbar.about us') }}</a>
                    </li>
                    <li class="logo">
                        <a href="/"><img src="{{ asset('img/home-two-logo.png') }}" alt=""></a>
                    </li>
                    <li class="">
                        <a href="/contact">{{ __('navbar.contact') }}</a>
                    </li>
                    @if(auth()->user())
                        <li class=""><a href="{{ route('profile') }}">
                                {{ __('profile') }}</a>
                        </li>
                        <li class=""><a href="{{ route('logout') }}">
                                {{ __('navbar.logout') }}</a>
                        </li>
                    @else
                        <li class="login-register-link"><a href="{{ route('registration') }}">
                                {{ __('navbar.login') }}</a>
                        </li>
                    @endif
                    <li class="dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-haspopup="true" aria-expanded="false">{{ app()->getLocale() }}<span class="ion-chevron-down"></span></a>
                        <ul class="dropdown-menu with-language">
                            <li><a rel="alternate" hreflang="tr" href="">TR</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
@endsection
@section('content')
    <div class="rq-page-content">
        <div class="rq-content-block" id="cars">
            <div class="rq-title-container text-center">
                <h2 class="rq-title no-padding">Most Popular <strong>Cars.</strong></h2>
            </div>
            <div class="rq-secondary-slider">
                <div class="owl-loop owl-carousel">
                    @isset($cars)
                        @foreach($cars as $car)
                            <div class="item">
                                <div class="car-details-bg">
                                    <span>$39/Days</span>
                                    <div class="owl-title-area">
                                        <h4><a href="#">2016 BMW 2 Series 228i</a></h4>
                                        <span class="rating">
                              <i class="ion-android-star"></i>
                              <i class="ion-android-star"></i>
                              <i class="ion-android-star"></i>
                              <i class="ion-android-star"></i>
                              <i class="ion-android-star"></i>
                            </span>
                                    </div>
                                </div>
                                <img src="{{ asset('img/tab-image/full-img1.png') }}" data-img-src="" alt="">
                                <h5><a href="#">2016 BMW 2 Series 228i</a></h5>
                            </div>
                        @endforeach
                    @endisset
                </div>
                <div class="browse-cars">
                    <a href="{{ route('cars') }}">Browse all cars</a>
                </div>

            </div>
        </div>
        <div class="rq-content-block gray-bg" id="services">
            <div class="rq-title-container text-center">
                <h2 class="rq-title no-padding">How it <strong>Work.</strong></h2>
            </div>
            <div class="rq-how-it-work-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="how-it-work-single">
                                <img src="{{ asset('img/icon1.png') }}" alt="">
                                <h4>Select Time<br> Pick Up & Return</h4>
                                <p>Select location, time to pick up, return and car type</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="how-it-work-single">
                                <img src="{{ 'img/icon2.png' }}" alt="">
                                <h4>find all<br>cars near you</h4>
                                <p>Scholar will help you find all hotel near your area</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="how-it-work-single">
                                <img src="{{ asset('img/icon3.png') }}" alt="">
                                <h4>pick a car<br>and enjoy your trip</h4>
                                <p>Pick a car that you want<br>and enjoy your trip</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div> <!-- /.rq-content-block -->
        <div class="rq-content-block gray-bg">
            <div class="newsletter-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <h2>Our <strong>Newsletter.</strong></h2>
                        </div>
                        <div class="col-md-8">
                            <form class="rq-newsletter-form" action="#">
                                <input class="" type="email" placeholder="youremail@domain.com">
                                <button type="submit" class="rq-btn rq-btn-primary">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- /.page-content -->
@endsection
