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
    ResolutionController,
    UpdateController
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

        // Dashboard homepage
        Route::get('/', [DashboardController::class, 'index'])->name('index');

        // Profile management
        Route::prefix('profile')->name('profile.')->group(function () {
            Route::get('/edit', [ProfileController::class, 'edit'])->name('edit');
            Route::post('/update', [ProfileController::class, 'update'])->name('update');
        });

        // Resolutions CRUD
        Route::resource('resolutions', ResolutionController::class);

        // Feedback page
        Route::get('feedbacks', function () {
            return view('dashboard.feedbacks.feedbacks');
        })->name('feedbacks');

        // Updates page **using your controller**
        Route::get('updates', [UpdateController::class, 'index'])->name('updates');

        // Accounts page
        // Accounts management routes
        Route::prefix('accounts')->name('accounts.')->group(function () {
            Route::get('/', function () {
                return view('dashboard.accounts.accounts');
            })->name('index');

            Route::put('/update', [AccountController::class, 'update'])->name('update');
            Route::put('/password', [AccountController::class, 'updatePassword'])->name('password');
            Route::delete('/delete', [AccountController::class, 'destroy'])->name('delete');
        });

        // Settings page
        Route::get('settings', function () {
            return view('dashboard.settings.settings');
        })->name('settings');

        // Help page
        Route::get('help', function () {
            return view('dashboard.help.help');
        })->name('help');
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

        // Dashboard
        Route::get('/dashboard', [UserDashboardController::class, 'index'])->name('dashboard');

        // User settings page
        Route::get('/settings', function () {
            return view('user.settings');
        })->name('settings');

        // Profile management
        Route::prefix('profile')->name('profile.')->group(function () {
            Route::get('/edit', [ProfileController::class, 'edit'])->name('edit');
            Route::put('/update', [ProfileController::class, 'update'])->name('update');
            Route::put('/password', [AccountController::class, 'updatePassword'])->name('password');
            Route::delete('/delete', [AccountController::class, 'destroy'])->name('delete');
        });
});