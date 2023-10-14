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
                        <h2 class="rq-title">Profile</h2>
                        <ol class="breadcrumb rq-subtitle">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li class="active">Profile</li>
                        </ol>
                    </div> <!-- end of breadcrumb -->

                    <div class="about-us-content-single">
                        <div class="row">
                            <div class="col-md-4">
                                <h2 class="brand-title">Profile<span class="dot">.</span></h2>
                            </div>
                            <div class="col-md-8">
                                <div id="respond" class="comment-respond">
                                    <h2 class="single-sub-title">Information</h2>
                                    <form action="{{ route('profile.edit') }}" method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-4">
                                                <input type="text" name="name" class="comment-input" placeholder="Enter your name..." value="{{ $user->name }}">
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" name="last_name" class="comment-input" placeholder="Enter your last name..." value="{{ $user->last_name }}">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <input type="text" name="phone" class="comment-input" placeholder="Enter your phone..." value="{{ $user->phone }}">
                                            </div>
                                            <div class="col-md-4">
                                                <input type="email" name="email" class="comment-input" placeholder="Enter your email..." value="{{ $user->email }}">
                                            </div>
                                            <div class="col-md-12">
                                                <button type="submit" class="continue-btn rq-btn rq-btn-normal">Submit Comment</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="rq-cart-items">
                        <h4>Current Reservations</h4>
                        <div class="cart-items-table">
                            <div class="table-responsive">
                                <table>
                                    <thead>
                                    <tr class="table-head">
                                        <th>CAR NAME</th>
                                        <th>PRICE</th>
                                        <th>DAYS</th>
                                        <th>TOTAL</th>
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
                                                            <li>Arrive Date: <span>{{ $reservation->pickup_date }}</span></li>
                                                            <li>Depature Date: <span>{{ $reservation->return_date }}</span> </li>
                                                            <li>Pickup Location: <span>{{ $reservation->pickupLocation->name }}</span></li>
                                                            <li>Return Location: <span>{{ $reservation->returnLocation->name }}</span></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>${{ $reservation->car->price_perday }}</td>
                                                <td>{{ $reservation->dayCount($reservation->id) }} Days</td>
                                                <td>${{ $reservation->price }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="rq-cart-items">
                        <h4>Your Reservation History</h4>
                        <div class="cart-items-table">
                            <div class="table-responsive">
                                <table>
                                    <thead>
                                    <tr class="table-head">
                                        <th>CAR NAME</th>
                                        <th>PRICE</th>
                                        <th>DAYS</th>
                                        <th>TOTAL</th>
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
                                                            <li>Arrive Date: <span>{{ $reservation->pickup_date }}</span></li>
                                                            <li>Depature Date: <span>{{ $reservation->return_date }}</span> </li>
                                                            <li>Pickup Location: <span>{{ $reservation->pickupLocation->name }}</span></li>
                                                            <li>Return Location: <span>{{ $reservation->returnLocation->name }}</span></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>${{ $reservation->car->price_perday }}</td>
                                                <td>{{ $reservation->dayCount($reservation->id) }} Days</td>
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
