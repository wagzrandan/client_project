<?php

use App\Http\Controllers\DoctorController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RegistrationController;

Route::resource('registration', RegistrationController::class);
Route::resource('doctors', DoctorController::class);


Route::get('/', function () {
    return view('welcome');
});
