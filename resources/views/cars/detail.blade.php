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
                <form action="{{ route('book') }}" method="get">
                    <input type="hidden" name="car_id" value="{{ $car->id }}">
                    <div class="container">
                        <div class="listing-page-title">
                            <h3>Book Car Now</h3>
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
                                                <select name="return_location" class="category-option">
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
                                        <div class="rq-search-single search-btn">
                                            <div class="rq-search-content">
                                                <button type="submit" class="rq-btn rq-btn-primary fluid-btn">Book Now <i class="arrow_right"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </form>
            </div> <!-- /.rq-content-block -->
        </div>
    </div> <!-- /.page-content -->
    @section('scripts')
        <script>
            initMapListing({{ $car->location->lat ?? ''}}, {{ $car->location->long ?? ''}});
        </script>
    @endsection
@endsection
