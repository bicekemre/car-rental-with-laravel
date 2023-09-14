<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LanguageController;
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

Route::get('/home', [HomeController::class, 'home'])->name('home');
Route::permanentRedirect('/', '/home');

Route::middleware('language')->group(function (){

    Route::prefix('{lang?}')->group(function (){
        Route::get('/home', [HomeController::class, 'home'])->name('home');

    });

    Route::controller(AuthController::class)->group(function () {
        Route::get('/registration' , 'registration')
            ->name('registration');

        Route::post('/login', 'login')
            ->name('login');

        Route::post('/register', 'register')
            ->name('register');

        Route::get('/logout', 'logout')
            ->name('logout');

        Route::get('/profile', 'profile')->name('profile');

    });


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

});





