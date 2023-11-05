<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CarController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

Route::get('/admin/cars', [CarController::class, 'index'])->name('admin.cars');

Route::post('/admin/cars-create', [CarController::class, 'create'])->name('car.create');

Route::get('/admin/cars-edit/create', [CarController::class, 'add'])->name('cars.edit');

Route::get('/admin/cars-edit/{id}', [CarController::class, 'add'])->name('cars.edit');
