<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Location;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $locations = Location::all();
        $carsCount = Car::all()->count();
        $usersCount  = User::all()->count();

        return view('home', compact('locations', 'carsCount', 'usersCount'));
    }
}
