<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function registration()
    {
        if (auth()->check() == 1) {
            return redirect()->route('profile', app()->getLocale());
        }
        return view('auth.login');
    }

    public function login(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->input('remember-me', false))) {
            if (isset($_COOKIE['request_data'])) {
                return redirect()->route('book', app()->getLocale());
            }else{
                return redirect()->route('profile', app()->getLocale());
            }
        } else {
            return back()->withErrors(['email' => 'Invalid credentials', 'password' => 'Invalid credentials']);
        }

    }

    public function register(Request $request)
    {
        $user = new User();

        $user->name = $request->name;
        $user->last_name = $request->last_name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->password = Hash::make($request->input('password'));

        $user->save();

        auth()->login($user);

        if (isset($_COOKIE['request_data'])) {
            return redirect()->route('book', app()->getLocale());
        }else{
            return redirect()->route('home', app()->getLocale());
        }
    }

    public function profile()
    {
        if (auth()->check() == 0) {
            return redirect()->route('registration', app()->getLocale());
        }
        $user = \auth()->user();

        $currentReservation = Reservation::query()->where(['user_id' => $user->getAuthIdentifier(), 'is_completed' => 1])->get();

        $reservations = Reservation::query()->where(['user_id' => $user->getAuthIdentifier(), 'is_completed' => 0])->get();


        return view('profiles.profile',compact('user','reservations', 'currentReservation'));
    }

    public function logout()
    {
        auth()->logout();

        return redirect()->route('home', app()->getLocale());
    }

}
