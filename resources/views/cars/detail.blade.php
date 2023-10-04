@extends('layouts.master')
@section('navbar')
    @include('layouts.navbar-two')
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
                        <h1 class="rq-title light">{{ __('detail.Car listing detail') }}</h1>
                        <ol class="breadcrumb secondary rq-subtitle">
                            <li><a href="{{ route('home') }}">{{ __('navbar.home') }}</a></li>
                            <li><a href="{{ route('cars') }}">{{ __('detail.Car listing') }}</a></li>
                            <li class="active">{{ __('detail.Car Listing Details') }}</li>
                        </ol>
                    </div> <!-- end of breadcrumb -->
                    <div class="rq-listing-promo-wrapper">
                        <div class="row"> <!-- start of listing promo -->
                            <div class="col-md-12">
                                <div class="rq-listing-promo-content">
                                    <div class="rq-listing-item">
                                        <img src="{{ asset('img/listing-icon1.png') }}" alt="">
                                        <h6 class="rq-listing-item-title">{{ __('detail.Mileage') }}</h6>
                                        <h4 class="rq-listing-item-number">{{ $car->mil }}</h4>
                                    </div>
                                    <div class="rq-listing-item">
                                        <img src="{{ asset('img/listing-icon2.png') }}" alt="">
                                        <h6 class="rq-listing-item-title">{{ __('detail.Transmission') }}</h6>
                                        <h4 class="rq-listing-item-number">{{ $desc->transmission ?? ''}}</h4>
                                    </div>
                                    <div class="rq-listing-item">
                                        <img src="{{ asset('img/listing-icon3.png') }}" alt="">
                                        <h6 class="rq-listing-item-title">{{ __('detail.Seats') }}</h6>
                                        <h4 class="rq-listing-item-number">{{ $car->seats }} {{ __('detail.Adults') }}</h4>
                                    </div>
                                    <div class="rq-listing-item">
                                        <img src="{{ asset('img/listing-icon4.png') }}" alt="">
                                        <h6 class="rq-listing-item-title">{{ __('detail.Luggage') }}</h6>
                                        <h4 class="rq-listing-item-number">{{ $desc->luggage ?? ''}} </h4>
                                    </div>
                                    <div class="rq-listing-item">
                                        <img src="{{ asset('img/listing-icon5.png') }}" alt="">
                                        <h6 class="rq-listing-item-title">{{ __('detail.Fuel') }}</h6>
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
                                <li role="presentation" class="active"><a href="#listing_tab_hor_1" aria-controls="listing_tab_hor_1" role="tab" data-toggle="tab">{{ __('detail.Features') }}</a></li>
                                <li role="presentation" ><a href="#listing_tab_hor_2" aria-controls="listing_tab_hor_2" role="tab" data-toggle="tab">{{ __('detail.Descriptions') }}</a></li>
                                <li role="presentation"><a href="#listing_tab_hor_3" aria-controls="listing_tab_hor_3" role="tab" data-toggle="tab">{{ __('detail.Reviews') }}({{ $countReviews }})</a></li>
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
                                   {!! $desc->desc ?? '' !!}
                                </div>
                                <div role="tabpanel" class="tab-pane" id="listing_tab_hor_3">
                                    @foreach($reviews as $review)
                                    <div class="rq-single-post-header">
                                        <div class="author-info-content">
                                          <span class="author-name"><a href="#">{{ $review->user->name }}</a>
                                            <span>
                                              @for ($i = 1; $i <= 5; $i++)
                                                    @if ($i <= $review->rating)
                                                        <i class="ion-android-star"></i>
                                                    @else
                                                        <i class="ion-android-star-outline"></i>
                                                    @endif
                                                @endfor
                                            </span>
                                          </span>
                                            <span class="author-role">{{ $review->comment }}</span>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>  <!-- ./edn feature tab -->
                    <div class="location-map">
                        <div class="listing-page-title">
                            <h3>{{ __('detail.Location') }}</h3>
                        </div>
                        <div class="rq-contact-us-map"> <!-- start map portion -->
                            <div id="listing-map"></div>
                        </div> <!-- end map portion -->
                    </div>
                </div>
            </div> <!-- .end rq-content-block -->
            <div class="rq-content-block gray-bg">
                <form action="{{ route('book', app()->getLocale()) }}" method="post">
                    @csrf
                    <input type="hidden" name="car_id" value="{{ $car->id }}">
                    <div class="container">
                        <div class="listing-page-title">
                            <h3>{{ __('detail.Book Car Now') }}</h3>
                            <div class="car-search">
                                <div class="car-search">
                                    <div class="rq-search-container">
                                        <div class="rq-search-single">
                                            <div class="rq-search-content">
                                                <span class="rq-search-heading">{{ __('detail.Pick Up Location') }}</span>
                                                <select name="pickup_location" class="category-option">
                                                    <option selected value="{{ $car->location->id ?? ''}}" >{{ $car->location->name ?? ''}}</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="rq-search-single">
                                            <div class="rq-search-content">
                                                <span class="rq-search-heading">{{ __('detail.Return Location') }}</span>
                                                <select name="return_location" class="category-option">
                                                    <option value="0">{{ __('detail.Pick a location') }}</option>
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
                                                <span class="rq-search-heading">{{ __('detail.Pick up') }}</span>
                                                <input type="text" name="pickup_date" class="rq-form-element datepicker" id="startdate" placeholder="Pick up date"/>
                                                <i class="ion-chevron-down datepicker-arrow"></i>
                                            </div>
                                        </div>
                                        <div class="rq-search-single">
                                            <div class="rq-search-content">
                                                <span class="rq-search-heading">{{ __('detail.Return') }}</span>
                                                <input type="text" name="return_date" class="rq-form-element" id="enddate" placeholder="Return date"/>
                                                <i class="ion-chevron-down datepicker-arrow"></i>
                                            </div>
                                        </div>
                                        <div class="rq-search-single search-btn">
                                            <div class="rq-search-content">
                                                <button type="submit" class="rq-btn rq-btn-primary fluid-btn">{{ __('detail.Book Now') }} <i class="arrow_right"></i></button>
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
@endsection
@section('scripts')
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD0QI6vd531_4xsTobCg_J1_6BZOEolRbs&libraries=visualization&callback=initMapListing">
    </script>
    <script>
        function initMapListing(lat, long) {
            var myLatLng = {lat: {{ $car->location->lat }}, long: {{ $car->location->long}}};
            var map = new google.maps.Map(document.getElementById('listing-map'), {
                zoom: 15,
                center: myLatLng,
                scrollwheel: false
            });
        }
    </script>
@endsection
