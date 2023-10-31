<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Location;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        $locations = Location::all();

        return  view('admin.cars.index', compact('cars', 'locations'));
    }

    public function create(Request $request)
    {
        if ($request->id == null) {
            $car = new Car();
        }else{
            $car = Car::find($request->id);
        }

        $car->brand = $request->brand;
        $car->model = $request->model;
        $car->mil = $request->mil;
        $car->transmission = $request->transmission;
        $car->seats = $request->seats;
        $car->fuel_type = $request->fuel_type;
        $car->fuel_amount = $request->fuel_amount;
        $car->location_id = $request->location_id;
        $car->price_perday = $request->price_perday;
        $car->type = $request->type;
        $car->class = $request->class;

        $car->save();

        return redirect()->route('admin.cars');
    }

    public function edit($id)
    {

    }
}

