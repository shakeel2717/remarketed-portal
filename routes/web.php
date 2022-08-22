<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DeviceController;
use Illuminate\Support\Facades\Route;


Route::redirect('/','dashboard');
Route::resource('dashboard', DashboardController::class);
Route::resource('device', DeviceController::class);