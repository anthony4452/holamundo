<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MascotaController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\AdopcionController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('personas', PersonaController::class);
Route::resource('mascotas', MascotaController::class);
Route::resource('adopciones', AdopcionController::class);