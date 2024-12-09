<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/signup', function () {
    return view('signup');
})->name('signup');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/registerSave',[UserController::class, 'register'])->name('registerSave');
Route::post('/login', [UserController::class, 'login'])->name('login');

