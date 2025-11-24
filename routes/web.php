<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    LoginController,
    RegisterController,
    ContactController,
    DashboardController,
    UserDashboardController,
    ProfileController,
    AccountController,
    ResolutionController
};

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
| Admin Dashboard
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'role:admin'])
    ->prefix('dashboard')
    ->name('dashboard.')
    ->group(function () {

        // Main Dashboard
        Route::get('/', [DashboardController::class, 'index'])->name('index');

        // Resolutions
        Route::prefix('resolutions')->name('resolutions.')->group(function () {
            Route::get('/', [ResolutionController::class, 'index'])->name('index');
            Route::get('/create', [ResolutionController::class, 'create'])->name('create');
            Route::post('/', [ResolutionController::class, 'store'])->name('store');
        });

        // Feedbacks & Updates
        Route::get('/feedbacks', [DashboardController::class, 'feedbacks'])->name('feedbacks');
        Route::get('/updates', [DashboardController::class, 'updates'])->name('updates');

        // Profile
        Route::prefix('profile')->name('profile.')->group(function () {
            Route::get('/edit', [ProfileController::class, 'edit'])->name('edit');
            Route::post('/update', [ProfileController::class, 'update'])->name('update');
        });

        // Accounts
        Route::prefix('accounts')->name('accounts.')->group(function () {
            Route::get('/', fn() => view('dashboard.accounts.accounts'))->name('accounts');
            Route::put('/update', [AccountController::class, 'update'])->name('update');
            Route::put('/password', [AccountController::class, 'updatePassword'])->name('password');
            Route::delete('/delete', [AccountController::class, 'destroy'])->name('delete');
        });

        // Settings & Help
        Route::view('/settings', 'dashboard.settings.settings')->name('settings');
        Route::view('/help', 'dashboard.help.help')->name('help');
    });

/*
|--------------------------------------------------------------------------
| User Dashboard
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'role:user'])
    ->prefix('user')
    ->name('user.')
    ->group(function () {

        Route::get('/dashboard', [UserDashboardController::class, 'index'])->name('dashboard');

        Route::prefix('profile')->name('profile.')->group(function () {
            Route::get('/edit', [ProfileController::class, 'edit'])->name('edit');
            Route::post('/update', [ProfileController::class, 'update'])->name('update');
        });
    });
