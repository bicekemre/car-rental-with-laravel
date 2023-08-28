<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Reservation;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all();

        return view('cars.index', compact('cars'));
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
        ])->whereNotIn('id', $carIdsToExclude)->get();

        $hasQuery = $request->q;

        return view('cars.index', compact('cars', 'hasQuery'));
    }

}
