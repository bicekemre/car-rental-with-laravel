<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LanguageController extends Controller
{
    public function changeLang($lang)
    {
        \app()->setLocale($lang);
        return redirect()->back();
    }
}
