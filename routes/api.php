<?php

use App\Http\Controllers\Auth;
use App\Http\Controllers\PostController;
use App\Http\Controllers\User\AvatarController;
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

/*
 * Protected Routes
 * */
Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::group(['prefix' => 'user', 'as' => 'user.'], function () {
        Route::post('/avatar', AvatarController::class);
    });

    Route::group(['prefix' => 'post', 'as' => 'post.'], function () {
        Route::get('/', [PostController::class, 'index'])->name(name: 'index');
        Route::get('/top-users', [PostController::class, 'topUsers'])->name(name: 'topUsers');
        Route::get('/{id}', [PostController::class, 'show'])->name(name: 'show');
    });
});
