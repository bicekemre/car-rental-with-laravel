<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Extra;
use App\Models\Location;
use App\Models\Reservation;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use MongoDB\Driver\Session;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        $locations  = Location::all();

        return view('cars.index', compact('cars','locations'));
    }


    public function list(Request $request)
    {
        $startDate = $request->input('pickup_date');
        $endDate = $request->input('return_date');

        $locations  = Location::all();

        $reservations = Reservation::where('is_completed', 0)
            ->whereBetween('pickup_date', [$startDate, $endDate])
            ->orWhereBetween('return_date', [$startDate, $endDate])
            ->get();

        $carIdsToExclude = $reservations->pluck('car_id')->toArray();

        $cars = Car::where([
            'location_id' => $request->location_id,
            'class' => $request->car_type,
        ])->whereNotIn('id', $carIdsToExclude)->get();

        $hasQuery = $request->q;

        return view('cars.index', compact('cars', 'hasQuery', 'locations'));
    }

    public function detail($id)
    {
        $car = Car::find($id);
        $extras = Extra::all();
        $locations = Location::all();

        return view('cars.detail', compact('car', 'extras', 'locations'));
    }

    public function book(Request $request)
    {
        if ($request->isMethod('post')) {

            $requestData = $request->all();
            $cookie = cookie('request_data', json_encode($requestData), 15);
        }

        if (!auth()->check()) {
            return redirect()->route('registration');
        }

        $cookieData = json_decode(cookie('request_data')->getValue());

        $car = Car::find($cookieData->car_id);
        $return_location = Location::find($cookieData->return_location);
        $locations = Location::all();

        return view('checkout', compact('cookieData', 'car', 'locations', 'return_location'))
            ->withCookie($cookie);
    }


}
