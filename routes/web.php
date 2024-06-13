<?php

use App\Http\Controllers\PortoController;;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/',[portoController::class, 'index']);
Route::get('/porto',[portoController::class, 'porto']);
Route::get('/kontak',[portoController::class, 'kontak']);