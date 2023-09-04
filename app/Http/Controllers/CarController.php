<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Location;
use App\Models\Reservation;
use Illuminate\Http\Request;

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

        return view('cars.index', compact('cars', 'hasQuery'));
    }

    public function detail($id)
    {
        $car = Car::find($id);

        return view('cars.detail', compact('car'));
    }

    public function book()
    {
        if (auth()->user()){
            return route('checkout');
        }else{
            return redirect()->route('registration');
        }
    }

}
