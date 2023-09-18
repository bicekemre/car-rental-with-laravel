<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\Response;

class Lang
{


    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
//        $lang = $request->route('lang?') ?? 'en';
//
//        app()->setLocale($lang);

        $lang = explode('/', $request->getRequestUri());

        app()->setLocale($lang[1] ?? 'en');

        return $next($request);
    }


}
