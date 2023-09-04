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
    <div class="rq-page-content"> <!-- start of page content -->
        <div class="rq-listing-details">
            <div class="rq-listing-single"> <!-- start of banner slider -->
                <div class="rq-listing-gallery-post">
                    <div class="rq-gallery-content">
                        <div class="details-slider owl-carousel">
                            @isset($car->imageable)
                                @foreach($car->imageable as $image)
                                    <div class="item">
                                        <img src="{{ asset($image->url) }}" alt="">
                                    </div>
                                @endforeach
                            @endisset
                        </div>
                    </div>
                </div>
            </div> <!-- end of banner slider -->
            <div class="rq-content-block">
                <div class="container">
                    <div class="rq-title-container bredcrumb-title text-center"> <!-- start of breadcrumb -->
                        <h1 class="rq-title light">Car listing detail</h1>
                        <ol class="breadcrumb secondary rq-subtitle">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('cars') }}">Car listing</a></li>
                            <li class="active">Car Listing Details</li>
                        </ol>
                    </div> <!-- end of breadcrumb -->
                    <div class="rq-listing-promo-wrapper">
                        <div class="row"> <!-- start of listing promo -->
                            <div class="col-md-12">
                                <div class="rq-listing-promo-content">
                                    <div class="rq-listing-item">
                                        <img src="{{ asset('img/listing-icon1.png') }}" alt="">
                                        <h6 class="rq-listing-item-title">Mileage</h6>
                                        <h4 class="rq-listing-item-number">{{ $car->mil }}</h4>
                                    </div>
                                    <div class="rq-listing-item">
                                        <img src="{{ asset('img/listing-icon2.png') }}" alt="">
                                        <h6 class="rq-listing-item-title">Transmission</h6>
                                        <h4 class="rq-listing-item-number">{{ $car->transmission }}</h4>
                                    </div>
                                    <div class="rq-listing-item">
                                        <img src="{{ asset('img/listing-icon3.png') }}" alt="">
                                        <h6 class="rq-listing-item-title">Seats</h6>
                                        <h4 class="rq-listing-item-number">{{ $car->seats }} Adults</h4>
                                    </div>
                                    <div class="rq-listing-item">
                                        <img src="{{ asset('img/listing-icon4.png') }}" alt="">
                                        <h6 class="rq-listing-item-title">Luggage</h6>
                                        <h4 class="rq-listing-item-number">{{ $car->luggage }} Bags</h4>
                                    </div>
                                    <div class="rq-listing-item">
                                        <img src="{{ asset('img/listing-icon5.png') }}" alt="">
                                        <h6 class="rq-listing-item-title">Fuel</h6>
                                        <h4 class="rq-listing-item-number">{{ $car->fuel_type }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end of listing promo -->
                    </div>
                    <div class="rq-feature-tab">
                        <div class="rq-blog-listing">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#listing_tab_hor_1" aria-controls="listing_tab_hor_1" role="tab" data-toggle="tab">Features</a></li>
                                <li role="presentation" ><a href="#listing_tab_hor_2" aria-controls="listing_tab_hor_2" role="tab" data-toggle="tab">Descriptions</a></li>
                                <li role="presentation"><a href="#listing_tab_hor_3" aria-controls="listing_tab_hor_3" role="tab" data-toggle="tab">Reviews(1)</a></li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="listing_tab_hor_1">
                                    <ul class="rq-listing-lists">
                                        @isset($car->features)
                                            @foreach($car->features as $feature)
                                                <li class="{{ $feature->is_set == 1 ? 'checked' : 'unchecked' }}">{{ $feature->name }}</li>
                                            @endforeach
                                        @endisset
                                        <li class="unchecked">Child Seats</li>
                                        <li class="checked">GPS</li>
                                        <li class="checked">Language</li>
                                        <li class="checked">Music</li>
                                        <li class="checked">Seat Belts</li>
                                        <li class="checked">Sleeping bags</li>
                                        <li class="checked">Water</li>
                                        <li class="checked">Bluetooth</li>
                                        <li class="unchecked">Onboard computer</li>
                                        <li class="checked">Audio Input</li>
                                        <li class="unchecked">Long term tips</li>
                                        <li class="checked">car kit</li>
                                        <li class="checked">Remote central looking</li>
                                        <li class="checked">climate control</li>
                                    </ul>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="listing_tab_hor_2">
                                   {!! $car->desc !!}
                                </div>
                                <div role="tabpanel" class="tab-pane" id="listing_tab_hor_3">
                                    <div class="rq-single-post-header">
                                        <div class="author-info-content">
                                            <div class="author-img"
                                                 style="background: url('img/post-single/single-post-author.jpg') top center no-repeat; background-size: cover">
                                            </div>
                                            <span class="author-name"><a href="#">Alex</a>
                            <span>
                              <i class="ion-android-star"></i>
                              <i class="ion-android-star"></i>
                              <i class="ion-android-star"></i>
                              <i class="ion-android-star"></i>
                              <i class="ion-android-star"></i>
                            </span>
                          </span>
                                            <span class="author-role">Impossible considered invitation him men instrument saw celebrated unpleasant.
                            Put rest and must set kind next many near nay. He exquisite continued explained middleton am.</span>
                                        </div>
                                    </div>
                                    <div class="review-form">
                                        <h4>Write your review</h4>
                                        <div class="review-star">
                                            <a href="#"><i class="ion-android-star"></i></a>
                                            <a href="#"><i class="ion-android-star"></i></a>
                                            <a href="#"><i class="ion-android-star"></i></a>
                                            <a href="#"><i class="ion-android-star"></i></a>
                                            <a href="#"><i class="ion-android-star"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  <!-- ./edn feature tab -->
                    <div class="location-map">
                        <div class="listing-page-title">
                            <h3>Location</h3>
                        </div>
                        <div class="rq-contact-us-map"> <!-- start map portion -->
                            <div id="listing-map"></div>
                        </div> <!-- end map portion -->
                    </div>
                </div>
            </div> <!-- .end rq-content-block -->
            <div class="rq-content-block gray-bg">
                <div class="container">
                    <div class="listing-page-title">
                        <h3>Book Car Now</h3>
                    </div>
                    <div class="rq-car-booking-section">
                        <div class="car-search">
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
                        <div class="booking-details">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="booking-section-single">
                                        <h3 class="section-title">Resources</h3>
                                        <div class="section-adding-option">
                                          <span class="rq-checkbox-secondary">
                                            <input type="checkbox" id="option-one">
                                            <label for="option-one">GPS <span>$14.00 - Per Day</span></label>
                                          </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-1"></div>
                                <div class="col-md-6">
                                    <div class="booking-section-single">
                                        <h3 class="section-title">Security Deposites</h3>
                                        <div class="section-adding-option">
                                          <span class="rq-checkbox-secondary">
                                            <input type="checkbox" id="option-four">
                                            <label for="option-four">Personal Accident Insurance <span>$10.00 - Per Day</span></label>
                                          </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <h3 class="total-price">Total Booking Cost : <span>$150.00</span></h3>
                                </div>
                                <div class="col-md-12">
                                    <div class="book-btn">
                                        <a href="{{ route('book') }}" class="rq-btn rq-btn-primary btn-large">Book Now <i class="ion-android-car"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- /.rq-content-block -->
        </div>
    </div> <!-- /.page-content -->
@endsection
