<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

// Default page
Route::get('/', function () {
    return view('welcome');
});

// Login routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Dashboard page
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');
