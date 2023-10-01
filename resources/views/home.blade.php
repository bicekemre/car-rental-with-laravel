@extends('layouts.master')
@section('header')
    <div class="header-body" style="background: url({{ asset('./img/turbo-banner-two.jpg') }}) top center no-repeat; background-size: 100% 65%;">
        <div class="container ">
            <h1>{{ __('home.welcome') }} <strong>Turbo</strong></h1>
            <p>{{ __('home.title') }} </p>
            <div class="rq-counting-list home-two-version">
                <ul class="list-unstyled">
                    <li>
                        <span class="count-result"  data-from="25" data-to="{{ $usersCount }}" data-speed="5000" data-refresh-interval="50"></span>
                        <span class="count-category">{{ __('home.User access') }}</span>
                    </li>
                    <li>
                        <span class="count-result"  data-from="25" data-to="{{ $carsCount }}" data-speed="5000" data-refresh-interval="50"></span>
                        <span class="count-category">{{ __('home.Cars') }}</span>
                    </li>
                    <li>
                        <span class="count-result" data-from="25" data-to="12460" data-speed="5000" data-refresh-interval="50"></span>
                        <span class="count-category">{{ __('home.Reviews') }}</span>
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
                                    <span class="rq-search-heading">{{ __('home.Location') }}</span>
                                    <select name="location_id" class="category-option">
                                        <option value="0">{{ __('home.Pick a location') }}</option>
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
                                    <span class="rq-search-heading">{{ __('home.Pick up') }}</span>
                                    <input type="text" name="pickup_date" class="rq-form-element datepicker" id="startdate" placeholder="{{ __('home.Pick up date') }}"/>
                                    <i class="ion-chevron-down datepicker-arrow"></i>
                                </div>
                            </div>
                            <div class="rq-search-single">
                                <div class="rq-search-content">
                                    <span class="rq-search-heading">Return</span>
                                    <input type="text" name="return_date" class="rq-form-element" id="enddate" placeholder="{{ __('home.Return date') }}"/>
                                    <i class="ion-chevron-down datepicker-arrow"></i>
                                </div>
                            </div>
                            <div class="rq-search-single">
                                <div class="rq-search-content last-child">
                                    <span class="rq-search-heading">{{ __('home.Car Type') }}</span>
                                    <select name="car_type" class="category-option">
                                        <option value="SUV">{{ __('home.SUV') }}</option>
                                        <option value="Sedan">{{ __('home.Sedan') }}</option>
                                        <option value="van">{{ __('home.Van') }}</option>
                                        <option value="Station Wagon">{{ __('home.Station Wagon') }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="rq-search-single search-btn">
                                <div class="rq-search-content">
                                    <button type="submit" class="rq-btn rq-btn-primary fluid-btn">{{ __('home.Search') }} <i class="arrow_right"></i></button>
                                </div>
                            </div>
                    </div> <!-- / .search-container -->
                </div>
            </form>
        </div>
    </div> <!-- /.header-body -->

@endsection
@section('navbar')
    @include('layouts.navbar-one')
@endsection
@section('content')
    <div class="rq-page-content">
        <div class="rq-content-block" id="cars">
            <div class="rq-title-container text-center">
                <h2 class="rq-title no-padding">{{ __('home.Most Popular') }} <strong>{{ __('home.Cars') }}.</strong></h2>
            </div>
            <div class="rq-secondary-slider">
                <div class="owl-loop owl-carousel">
                    @isset($cars)
                        @foreach($cars as $car)
                            <div class="item">
                                <div class="car-details-bg">
                                    <span>{{ $car->price_perday }}/{{ __('home.Days') }}</span>
                                    <div class="owl-title-area">
                                        <h4><a href="#">{{ $car->brand . ' ' .$car->model }}</a></h4>
                                    </div>
                                </div>
                                <img src="{{ asset('img/tab-image/full-img1.png') }}" data-img-src="" alt="">
                            </div>
                        @endforeach
                    @endisset
                </div>
                <div class="browse-cars">
                    <a href="{{ route('cars') }}">{{ __('home.Browse all cars') }}</a>
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
