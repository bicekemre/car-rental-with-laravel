<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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

    public function password(Request $request)
    {
        if (auth()->check() == 0) {
            return redirect()->route('registration', app()->getLocale());
        }

        $userID = auth()->user()->getAuthIdentifier();

        $user = User::find($userID);

        if ($user->password == $request->new_password){
            if ($request->password == $request->re_new_password){
                $user->password = Hash::make($request->new_password);
            }else{
                return back()->withErrors(['password-confirmation' => 'Passwords do nor matches']);
            }
        }else{
            return back()->withErrors(['password-confirmation' => 'Passwords do nor matches']);
        }
    }
}
