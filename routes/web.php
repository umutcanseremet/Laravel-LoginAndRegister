<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::controller(AuthController::class)
    ->group(function () {
        Route::get('/login', 'login_view');
        Route::get('/register', 'register_view');
        Route::post('/login', 'login')->name('login');
        Route::post('/register', 'register')->name('register');
        Route::get('/logout', 'logout')->name("logout");
    });

Route::middleware('auth')->name('index')->get('/', function () {
    return Auth::user();
});
