<?php

use App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

/*
 * Login And Register
 * */
Route::group(['prefix' => 'auth', 'as' => 'auth.'], function () {
    Route::post('register', Auth\RegisterController::class)->name('register');
    Route::post('login', Auth\LoginController::class)->name('login');
});
