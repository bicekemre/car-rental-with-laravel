<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Location;
use App\Models\Reviews;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $locations = Location::all();
        $cars = Car::all();
        $carsCount = $cars->count();
        $usersCount  = User::all()->count();
        $reviewsCount = Reviews::all()->count();

        return view('home', compact(
            'locations',
            'cars', 'carsCount', 'usersCount', 'reviewsCount'));
    }
}
