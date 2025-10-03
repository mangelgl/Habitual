<?php

use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
})->name('inicio');

// Auth routes
Route::get('/register', [RegisterController::class, 'index'])->name('register');