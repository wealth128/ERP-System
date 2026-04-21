<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\StoreController;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('employees', EmployeeController::class);

Route::resource('stores', StoreController::class);

