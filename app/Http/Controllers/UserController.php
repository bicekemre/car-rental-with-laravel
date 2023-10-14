<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function edit(Request $request)
    {
        if (auth()->check() == 0) {
            return redirect()->route('registration', app()->getLocale());
        }

        $userID = auth()->user()->getAuthIdentifier();

        $user = User::find($userID);

        $user->name = $request->name;
        $user->last_name = $request->last_name;
        $user->phone = $request->phone;
        $user->email = $request->email;

       $user->save();


        return redirect()->route('profile', app()->getLocale());
    }
}
