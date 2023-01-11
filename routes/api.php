<?php

use App\Http\Controllers\API\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// API Register
Route::post('/register', [AuthController::class, 'register']);

// API Register
Route::post('/login', [AuthController::class, 'login']);

// API Logout
Route::group(['middleware' => ['auth:sanctum']], function (){
    Route::get('/profile', function(Request $request ){
        return auth()->user();
    });

    Route::post('/logout', [AuthController::class, 'logout']);
});


