@extends('layouts.master')
@section('navbar')
    @include('layouts.navbar-two')
@endsection
@section('content')
    <div class="rq-page-content"> <!-- start of page content -->
        <div class="rq-content-block">
            <div class="rq-shopping-content-block">
                <div class="container">
                    <div class="rq-title-container bredcrumb-title small"> <!-- start of breadcrumb -->
                        <h2 class="rq-title">{{ __('profile.Profile') }}</h2>
                        <ol class="breadcrumb rq-subtitle">
                            <li><a href="{{ route('home') }}">{{ __('navbar.home') }}</a></li>
                            <li class="active">{{ __('profile.Profile') }}</li>
                        </ol>
                    </div> <!-- end of breadcrumb -->

                    <div class="about-us-content-single">
                        <div class="row">
                            <div class="col-md-4">
                                <h2 class="brand-title">{{ __('profile.Profile') }}<span class="dot">.</span></h2>
                            </div>
                            <div class="col-md-8">
                                <div id="respond" class="comment-respond">
                                    <h2 class="single-sub-title">{{ __('profile.Information') }}</h2>
                                    <form action="{{ route('profile.edit') }}" method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-4">
                                                <input type="text" name="name" class="comment-input" placeholder="{{ __('profile.Enter your name') }}..." value="{{ $user->name }}">
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" name="last_name" class="comment-input" placeholder="{{ __('profile.Enter your last name') }}..." value="{{ $user->last_name }}">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <input type="text" name="phone" class="comment-input" placeholder="{{ __('profile.Enter your phone') }}..." value="{{ $user->phone }}">
                                            </div>
                                            <div class="col-md-4">
                                                <input type="email" name="email" class="comment-input" placeholder="{{ __('profile.Enter your email') }}..." value="{{ $user->email }}">
                                            </div>
                                            <div class="col-md-12">
                                                <button type="submit" class="continue-btn rq-btn rq-btn-normal">{{ __('profile.Submit') }}</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <h2 class="brand-title">Password<span class="dot">.</span></h2>
                            </div>
                            <div class="col-md-8">
                                <div id="respond" class="comment-respond">
                                    <h2 class="single-sub-title">Password Change</h2>
                                    @error('password-confirmation')
                                        <h2 class="danger">Invalid passwords</h2>
                                    @enderror
                                    <form action="{{ route('profile.password') }}" method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-4">
                                                <input type="password" name="password" class="comment-input" placeholder="{{ __('profile.Enter your password') }}...">
                                            </div>
                                            <div class="col-md-4">
                                                <input type="password" name="new_password" class="comment-input" placeholder="{{ __('profile.Enter new password') }}...">
                                            </div>
                                            <div class="col-md-4">
                                                <input type="password" name="re_new_password" class="comment-input" placeholder="{{ __('profile.Password Confirmation') }}...">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button type="submit" class="continue-btn rq-btn rq-btn-normal">{{ __('profile.Submit') }}</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="rq-cart-items">
                        <h4>{{ __('profile.Current Reservations') }}</h4>
                        <div class="cart-items-table">
                            <div class="table-responsive">
                                <table>
                                    <thead>
                                    <tr class="table-head">
                                        <th>{{ __('profile.CAR NAME') }}</th>
                                        <th>{{ __('profile.PRICE') }}</th>
                                        <th>{{ __('profile.DAYS') }}</th>
                                        <th>{{ __('profile.TOTAL') }}</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($currentReservation as $reservation)
                                            <tr>
                                                <td>
                                                    <a href=""><img src="{{ asset($reservation->car->imageable->first()->url ?? '') }}" alt="item"></a>
                                                    <div class="details">
                                                        <h5>{{ $reservation->car->brand. ' ' . $reservation->car->model }}</h5>
                                                        <ul class="items">
                                                            <li>{{ __('profile.Arrive Date') }}: <span>{{ $reservation->pickup_date }}</span></li>
                                                            <li>{{ __('profile.Departure Date') }}: <span>{{ $reservation->return_date }}</span> </li>
                                                            <li>{{ __('profile.Pickup Location') }}: <span>{{ $reservation->pickupLocation->name }}</span></li>
                                                            <li>{{ __('profile.Return Location') }}: <span>{{ $reservation->returnLocation->name }}</span></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>${{ $reservation->car->price_perday }}</td>
                                                <td>{{ $reservation->dayCount($reservation->id) }}{{ __('profile.Days') }}</td>
                                                <td>${{ $reservation->price }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="rq-cart-items">
                        <h4>{{ __('profile.Your Reservation History') }}</h4>
                        <div class="cart-items-table">
                            <div class="table-responsive">
                                <table>
                                    <thead>
                                    <tr class="table-head">
                                        <th>{{ __('profile.CAR NAME') }}</th>
                                        <th>{{ __('profile.PRICE') }}</th>
                                        <th>{{ __('profile.DAYS') }}</th>
                                        <th>{{ __('profile.TOTAL') }}</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($reservations as $reservation)
                                            <tr>
                                                <td>
                                                    <a href=""><img src="{{ asset($reservation->car->imageable->first()->url ?? '') }}" alt="item"></a>
                                                    <div class="details">
                                                        <h5>{{ $reservation->car->brand. ' ' . $reservation->car->model }}</h5>
                                                        <ul class="items">
                                                            <li>{{ __('profile.Arrive Date') }}: <span>{{ $reservation->pickup_date }}</span></li>
                                                            <li>{{ __('profile.Departure Date') }}: <span>{{ $reservation->return_date }}</span> </li>
                                                            <li>{{ __('profile.Pickup Location') }}: <span>{{ $reservation->pickupLocation->name }}</span></li>
                                                            <li>{{ __('profile.Return Location') }}: <span>{{ $reservation->returnLocation->name }}</span></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>${{ $reservation->car->price_perday }}</td>
                                                <td>{{ $reservation->dayCount($reservation->id) }} {{ __('profile.Days') }}</td>
                                                <td>${{ $reservation->price }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div> <!-- /.page-content -->
@endsection
