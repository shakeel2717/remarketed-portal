<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;


Route::redirect('/','dashboard');
Route::resource('dashboard', DashboardController::class);
Route::resource('device', DeviceController::class);
Route::resource('task', TaskController::class);
Route::resource('employee', EmployeeController::class);