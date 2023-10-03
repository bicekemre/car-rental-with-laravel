@extends('layouts.master')
@section('navbar')
    @include('layouts.navbar-two')
@endsection
@section('content')
    <div class="rq-page-content">
        <div class="rq-content-block">
            <div class="container">
                <div class="rq-title-container bredcrumb-title small">
                    <h2 class="rq-title">{{ __('book.Checkout') }}</h2>
                    <ol class="breadcrumb rq-subtitle">
                        <li><a href="#">{{ __('navbar.home') }}</a></li>
                        <li class="active">{{ __('book.Checkout') }}</li>
                    </ol>
                </div> <!-- end .rq-title-container -->
                <div class="rq-checkout-wrapper">
                    <form action="{{ route('reserve', app()->getLocale()) }}" method="post">
                        @csrf
                        <input type="hidden" name="car_id" value="{{ $car->id }}">
                        <div class="container">
                            <div class="row">
                                <div class="panel-group" id="checkout-accordion" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="billing-information-heading">
                                            <h4 class="panel-title">
                                                <a role="button" data-toggle="collapse" data-parent="#checkout-accordion" href="#billing-information" aria-expanded="true" aria-controls="billing-information">
                                                    {{ __('book.Billing Information') }}
                                                </a>
                                            </h4>
                                        </div> <!-- end .panel-heading -->
                                        <div id="billing-information" class="panel-collapse collapse" role="tabpanel" aria-labelledby="billing-information-heading">
                                            <div class="panel-body">
                                                <div class="rq-login-form no-border">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <input type="text" id="billing-name" class="rq-form-control reverse" name="billing_name" placeholder="{{ __('book.name and surname') }}" required>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="text" id="billing-address" class="rq-form-control reverse" name="billing_address" placeholder="{{ __('book.Address') }}" required>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="text" id="billing-city" name="billing_city" class="rq-form-control reverse" placeholder="{{ __('book.City') }}" required>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="text" id="billing-zip" name="billing_zip" class="rq-form-control reverse" placeholder="{{ __('Zip Code') }}" required>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="tel" id="billing-phone" name="billing_phone" class="rq-form-control reverse" placeholder="{{ __('Phone') }}" required>
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
                                                    {{ __('book.Payment Information') }}
                                                </a>
                                            </h4>
                                        </div> <!-- end .panel-heading -->
                                        <div id="payment-information" class="panel-collapse collapse" role="tabpanel" aria-labelledby="payment-information-heading">
                                            <div class="panel-body">
                                                <div class="rq-login-form no-border">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <input type="text" id="name-surname" name="name_surname" class="rq-form-control reverse"  placeholder="{{ __('book.name and surname') }}" required>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="text" id="credit-card" name="credit_card" class="rq-form-control reverse"  placeholder="{{ __('book.Credit Card') }}" required>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="text" id="expiration-date" name="expiration_date" class="rq-form-control reverse"  placeholder="{{ __('book.Expiration date') }}" required>
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
                                                    {{ __('book.Order Review') }}
                                                </a>
                                            </h4>
                                        </div> <!-- end .panel-heading -->
                                        <div id="order-review" class="panel-collapse collapse" role="tabpanel" aria-labelledby="order-review-heading">
                                            <div class="panel-body">
                                                <div class="row">
                                                    {{ $car->desc[0]->desc ?? ''}}
                                                </div>
                                                <div class="row">
                                                    <h4> {{ __('book.Total Price') }} =   ${{ $totalPrice }}</h4>
                                                    <input type="hidden" name="price" value="{{ $totalPrice }}">
                                                </div>
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
                                                                    <select name="return_location" value="" class="category-option">
                                                                        <option value="0">{{ __('detail.Pick a location') }}</option>
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
                                                                    <span class="rq-search-heading">{{ __('detail.Pick up') }}</span>
                                                                    <input type="text" name="pickup_date" value="{{ $cookieData->pickup_date }}" class="rq-form-element datepicker" id="startdate" placeholder="Pick up date"/>
                                                                    <i class="ion-chevron-down datepicker-arrow"></i>
                                                                </div>
                                                            </div>
                                                            <div class="rq-search-single">
                                                                <div class="rq-search-content">
                                                                    <span class="rq-search-heading">{{ __('detail.Return') }}</span>
                                                                    <input type="text" name="return_date" value="{{ $cookieData->return_date }}" class="rq-form-element" id="enddate" placeholder="Return date"/>
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
                                            </div> <!-- end .panel-body -->
                                        </div> <!-- end .panel-collapse -->
                                    </div> <!-- end .panel-default -->
                                </div> <!-- end #accordion -->
                            </div> <!-- end .row -->
                        </div> <!-- end .container -->
                    </form>
                </div> <!-- end .rq-element-wrapper -->
            </div> <!-- end .container -->
        </div> <!-- end .rq-content-block -->
    </div> <!-- end .rq-page-content -->
@endsection
