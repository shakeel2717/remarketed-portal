<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;


Route::redirect('/','dashboard');
Route::resource('dashboard', DashboardController::class);