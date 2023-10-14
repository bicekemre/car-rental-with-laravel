<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware('language')->group(function (){
    Route::permanentRedirect('/home', '/' .  app()->getLocale(). '/home');
    Route::permanentRedirect('/', '/' .  app()->getLocale(). '/home');


    Route::prefix('{lang?}')->group(function (){

        Route::post('/login', [AuthController::class, 'login'])->name('login');



        Route::post('/register', [AuthController::class, 'register'])
            ->name('register');

        Route::get('/logout', [AuthController::class, 'logout'])
            ->name('logout');




        Route::get('/home', [HomeController::class, 'home'])
            ->name('home');

        Route::get('/registration', [AuthController::class, 'registration'])
            ->name('registration');

        Route::get('/profile', [AuthController::class, 'profile'])
            ->name('profile');


        Route::get('/car-detail/{id}', [CarController::class, 'detail'])->name('detail');

        Route::controller(CarController::class)->group(function () {
            Route::get('/cars', 'index')
                ->name('cars');

            Route::get('/list-cars', 'list')
                ->name('list.cars');

           Route::get('/car-detail/{id}', 'detail')
                ->name('detail');

            Route::get('/book', 'book')
                ->name('book');

            Route::post('/book', 'book')
                ->name('book');


        });

        Route::post('/reserve', [CarController::class, 'reserve'])->name('reserve');



    });

});

Route::post('/profile/edit', [UserController::class, 'edit'])->name('profile.edit');




