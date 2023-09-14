<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function registration()
    {
        if (auth()->check() == 1) {
            return redirect()->route('profile');
        }
        return view('auth.login');
    }

    public function login(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->input('remember-me', false))) {
            if (request()->hasCookie('request_data')) {
                return redirect()->route('book');
            }else{
                return redirect()->route('home');
            }
        } else {
            return back()->withErrors(['email' => 'Invalid credentials']);
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

        if (\request()->hasCookie('request_data')) {
            return redirect()->route('book');
        }else{
            return redirect()->route('home');
        }
    }

    public function profile()
    {
        return view('profile');
    }

    public function logout()
    {
        auth()->logout();

        return redirect()->route('home');
    }

}
