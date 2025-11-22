<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\ResolutionController;

/*
|--------------------------------------------------------------------------
| Authentication Routes
|--------------------------------------------------------------------------
*/
Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'showLoginForm')->name('login');
    Route::post('/login', 'login')->name('login.post');
    Route::post('/logout', 'logout')->name('logout');
});

Route::controller(RegisterController::class)->group(function () {
    Route::get('/signup', 'showRegistrationForm')->name('signup');
    Route::post('/register', 'register')->name('register');
});

/*
|--------------------------------------------------------------------------
| Public Landing Pages
|--------------------------------------------------------------------------
*/
Route::view('/', 'welcome')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/terms', 'terms')->name('terms');
Route::view('/privacy', 'privacy')->name('privacy');
Route::view('/contact', 'contact')->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

Route::get('/get-started', fn() => redirect()->route('login'))->name('get-started');

/*
|--------------------------------------------------------------------------
| Dashboard Routes (Protected)
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->prefix('dashboard')->group(function () {

    // Main dashboard
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    // Feedback & Updates
    Route::get('/feedbacks', [DashboardController::class, 'feedbacks'])->name('dashboard.feedbacks');
    Route::get('/updates', [DashboardController::class, 'updates'])->name('dashboard.updates');

    // Profile
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');

    // Accounts
    Route::view('/accounts', 'dashboard.accounts.accounts')->name('dashboard.accounts.accounts');
    Route::put('/accounts/update', [AccountController::class, 'update'])->name('accounts.update');
    Route::put('/accounts/password', [AccountController::class, 'updatePassword'])->name('accounts.password');
    Route::delete('/accounts/delete', [AccountController::class, 'destroy'])->name('accounts.delete');

    // Settings & Help
    Route::view('/settings', 'dashboard.settings.settings')->name('dashboard.settings.settings');
    Route::view('/help', 'dashboard.help.help')->name('dashboard.help.help');

    // Resolutions
    Route::get('/resolutions', [ResolutionController::class, 'index'])->name('dashboard.resolutions'); // Use this for Blade links
    Route::get('/resolutions/create', [ResolutionController::class, 'create'])->name('dashboard.resolutions.create');
    Route::post('/resolutions', [ResolutionController::class, 'store'])->name('dashboard.resolutions.store');
});
