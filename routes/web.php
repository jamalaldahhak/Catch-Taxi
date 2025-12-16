<?php

use Illuminate\Support\Facades\Route;
use App\Http\API\Controllers\Auth\AuthController;
Route::get('/', function () {
    return view('welcome');
});

// routes/web.php
    Route::get('login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('login', [AuthController::class, 'login']);

    Route::get('register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('register', [AuthController::class, 'register']);

Route::get('/', function () {
    return view('dashboard');
});
Route::post('logout', [AuthController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');
 Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
Route::get('/lang/{locale}', function ($locale) {
    session(['locale' => $locale]);
    return back();
});
