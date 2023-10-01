<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Card;
use App\Models\Extra;
use App\Models\Invoice;
use App\Models\Location;
use App\Models\Reservation;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Carbon\Carbon;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::query()->paginate(6);
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

        $cars = Car::query()->where([
            'location_id' => $request->location_id,
            'class' => $request->car_type,
        ])->whereNotIn('id', $carIdsToExclude)->paginate(6);

        $hasQuery = $request->q;

        return view('cars.index', compact('cars', 'hasQuery', 'locations'));
    }

    public function detail($lang, $id)
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
            setcookie('request_data', json_encode($requestData), time() + 900);
        }

        if (!auth()->check()) {
            return redirect()->route('registration');
        }

        $cookieData = json_decode($_COOKIE['request_data']);

        $car = Car::find($cookieData->car_id);

        $pickupDate = Carbon::createFromFormat('m/d/Y', $cookieData->pickup_date);
        $returnDate = Carbon::createFromFormat('m/d/Y', $cookieData->return_date);

        $dayAmount = $pickupDate->diffInDays($returnDate);

        $totalPrice = $dayAmount * $car->price_perday;



        $return_location = Location::find($cookieData->return_location);
        $locations = Location::all();

        return view('checkout', compact('cookieData',
            'car',
            'locations',
            'return_location',
            'totalPrice'
        ));
    }

    public function reserve(Request $request)
    {
        $user_id = auth()->user()->getAuthIdentifier();

        $reservation = new Reservation();

        $reservation->user_id = $user_id;
        $reservation->car_id = $request->car_id;
        $reservation->pickup_date = $request->pickup_date;
        $reservation->return_date = $request->return_date;
        $reservation->pickup_location = $request->pickup_location;
        $reservation->return_location = $request->return_location;
        $reservation->price = $request->price;
        $reservation->is_completed = 0;

        $reservation->save();


        $invoice = new Invoice();

        $invoice->reservation_id = $reservation->id;
        $invoice->name = $request->billing_name;
        $invoice->address = $request->billing_address;
        $invoice->city = $request->billing_city;
        $invoice->zip = $request->billing_zip;

        $invoice->save();


        $card = new Card();

        $card->user_id = $user_id;
        $card->name_surname = $request->name_surname;
        $card->number = $request->credit_card;
        $card->expration_date = $request->expration_date;
        $card->cvv = $request->cvv;

        $card->save();


        return redirect()->route('profile');
    }


}
