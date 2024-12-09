<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Apply the ApiToken middleware to your API routes
    // Your API routes here
    Route::group(['prefix' => 'auth'], function ($router) {
        Route::post('register', [UserController::class,'register'])->name('register');
        Route::post('login', [UserController::class,'login'])->name('login');
    });

    Route::middleware(['auth:api'])->group(function(){
        Route::post('refresh',[UserController::class,'refresh']);
        Route::post('me',[UserController::class,'me']);
    });
    