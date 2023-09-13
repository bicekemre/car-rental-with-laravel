@extends('layouts.master')
@section('navbar')
    @include('layouts.navbar-two')
@endsection
@section('content')
    @if( isset($hasQuery) == 0)
        <div class="inner-page-banner" style="background: url({{ asset('img/inner-banner/listing-banner.jpg') }}) top center no-repeat; background-size: cover;">
            <div class="rq-overlay"></div>
            <div class="container">
                <div class="rq-title-container bredcrumb-title text-center">
                    <h2 class="rq-title">Car Listing</h2>
                    <ol class="breadcrumb rq-subtitle secondary">
                        <li><a href="#">Home</a></li>
                        <li class="active">Car Listing</li>
                    </ol>
                </div>
            </div>
        </div> <!-- /. inner pagebanner -->
    @endif
    <div class="rq-page-content">
        <div class="rq-content-block gray-bg small-padding-top">
            <div class="container">
                <div class="listing-search-container">
                    <h2>Search For<span class="dot">.</span></h2>
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

                </div> <!-- /.search-container -->
                <div class="rq-listing-top-bar-filter-option">
                    <div class="filter-list">
                        <h5>Filter by</h5>
                        <div class="filter-single">
                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Brand <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li>
                        <span class="rq-checkbox">
                          <input type="checkbox" id="brand-one">
                          <label for="brand-one">Ford Shelby</label>
                        </span>
                                    </li>
                                    <li>
                        <span class="rq-checkbox">
                          <input type="checkbox" id="brand-two">
                          <label for="brand-two">BMW M6 Gran</label>
                        </span>
                                    </li>
                                    <li>
                        <span class="rq-checkbox">
                          <input type="checkbox" id="brand-three">
                          <label for="brand-three">AUDI R8 2011</label>
                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="filter-single">
                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Class <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">

                                    <li>
                        <span class="rq-checkbox">
                          <input type="checkbox" id="class-a">
                          <label for="class-a">A class</label>
                        </span>
                                    </li>
                                    <li>
                        <span class="rq-checkbox">
                          <input type="checkbox" id="class-b">
                          <label for="class-b">B class</label>
                        </span>
                                    </li>
                                    <li>
                        <span class="rq-checkbox">
                          <input type="checkbox" id="class-c">
                          <label for="class-c">C class</label>
                        </span>
                                    </li>
                                    <li>
                        <span class="rq-checkbox">
                          <input type="checkbox" id="class-d">
                          <label for="class-d">D class</label>
                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="filter-single">
                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Fuel <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li>
                        <span class="rq-checkbox">
                          <input type="checkbox" id="fule-one">
                          <label for="fule-one">50 liter</label>
                        </span>
                                    </li>
                                    <li>
                        <span class="rq-checkbox">
                          <input type="checkbox" id="fuel-two">
                          <label for="fuel-two">100 liter</label>
                        </span>
                                    </li>
                                    <li>
                        <span class="rq-checkbox">
                          <input type="checkbox" id="fuel-three">
                          <label for="fuel-three">120 liter</label>
                        </span>
                                    </li>
                                    <li>
                        <span class="rq-checkbox">
                          <input type="checkbox" id="fuel-four">
                          <label for="fuel-four">130 liter</label>
                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="filter-single">
                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Price <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="rq-pricing-slider">
                                            <div id="slider-range"></div>
                                            <p>
                                                <label for="amount">range:</label>
                                                <input type="text" id="amount">
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="rq-grid-list-view-option">
                        <a class="active" href="#" data-class="rq-listing-grid"><i class="ion-grid"></i></a>
                        <a href="#" data-class="rq-listing-list"><i class="ion-navicon"></i></a>
                    </div>
                </div>

                <div class="rq-car-listing-wrapper">
                    <div class="rq-listing-choose rq-listing-grid">
                        <div class="row">
                            @isset($cars)
                                @foreach($cars as $car)
                                    <div class="col-md-4 col-sm-6">
                                        <div class="listing-single">
                                            <div class="listing-img">
                                                <img src="{{ $car->imageable->first()->url ?? '' }}" alt="">
                                            </div>
                                            <div class="listing-details">
                                                <h5 class="car-brand">{{ $car->brand }}</h5>
                                                <h3 class="car-name"><a href="{{ route('detail',$car->id)  }}">{{ $car->brand . ' ' . $car->model}}</a></h3>
                                                <ul class="rating-list">
                                                    <li><i class="ion-star"></i></li>
                                                    <li><i class="ion-star"></i></li>
                                                    <li><i class="ion-star"></i></li>
                                                    <li><i class="ion-star"></i></li>
                                                    <li><i class="ion-star"></i></li>
                                                </ul>
                                                <ul>
                                                    <li>Class: <span>{{ $car->class }}</span></li>
                                                    <li>Body Style: <span>{{ $car->type }}</span></li>
                                                    <li>Transmission: <span>{{ $car->transmission }}</span></li>
                                                </ul>
                                                <div class="listing-footer">
                                                    <span><a href="{{ route('detail',$car->id)  }}">Details</a></span>
                                                    <span>
                                                        Starting at <span class="price">${{ $car->price_perday }}</span> / day
                                                    </span>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endisset
                        </div>
                    </div>
                    <div class="rq-pagination">
                        <nav>
                            <ul class="rq-pagination-list">
                                <li class="pagin-text">
                                    <a href="#" aria-label="Previous">
                                        <span aria-hidden="true"><i class="arrow_left"></i> Prev</span>
                                    </a>
                                </li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a class="center-dot" href="#">...</a></li>
                                <li><a href="#">12</a></li>
                                <li class="pagin-text">
                                    <a href="#" aria-label="Next">
                                        <span aria-hidden="true">next <i class="arrow_right"></i></span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>

            </div>
        </div>  <!-- /.rq-content-block -->
    </div>
@endsection
