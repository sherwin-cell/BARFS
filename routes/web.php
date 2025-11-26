<?php

use Illuminate\Support\Facades\Route;

// Authentication Controllers
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ContactController;

// Admin Controllers
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\ResolutionController;
use App\Http\Controllers\UpdateController;
use App\Http\Controllers\ResidentController;
use App\Http\Controllers\AdminFeedbackController;

// User Controllers
use App\Http\Controllers\User\UserDashboardController;
use App\Http\Controllers\User\UserResolutionController;
use App\Http\Controllers\User\UserFeedbackController;
use App\Http\Controllers\User\UserProfileController;
use App\Http\Controllers\User\UserUpdatesController;

/*
|--------------------------------------------------------------------------
| Public Pages
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
| Authentication
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
| Admin Dashboard Routes
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'role:admin'])
    ->prefix('dashboard')
    ->name('dashboard.')
    ->group(function () {

    Route::get('/', [DashboardController::class, 'index'])->name('index');

    // Profile
    Route::prefix('profile')->name('profile.')->group(function () {
        Route::get('/edit', [ProfileController::class, 'edit'])->name('edit');
        Route::post('/update', [ProfileController::class, 'update'])->name('update');
    });

    // Resolutions & Residents
    Route::resource('resolutions', ResolutionController::class);
    Route::resource('residents', ResidentController::class);

    // Feedbacks (Admin)
    Route::prefix('feedbacks')->name('feedbacks.')->group(function () {
        Route::get('/', [AdminFeedbackController::class, 'index'])->name('index');
        Route::get('/{feedback}', [AdminFeedbackController::class, 'show'])->name('show');
        Route::get('/{feedback}/reply', [AdminFeedbackController::class, 'replyForm'])->name('reply');
        Route::post('/{feedback}/reply', [AdminFeedbackController::class, 'storeReply'])->name('storeReply');
    });

    // Updates
    Route::resource('updates', UpdateController::class);

    // Accounts
    Route::prefix('accounts')->name('accounts.')->group(function () {
        Route::get('/', fn() => view('dashboard.accounts.accounts'))->name('index');
        Route::put('/update', [AccountController::class, 'update'])->name('update');
        Route::put('/password', [AccountController::class, 'updatePassword'])->name('password');
        Route::delete('/delete', [AccountController::class, 'destroy'])->name('delete');
    });

    // Settings & Help
    Route::view('settings', 'dashboard.settings.settings')->name('settings');
    Route::view('help', 'dashboard.help.help')->name('help');
});

/*
|--------------------------------------------------------------------------
| User Dashboard Routes
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'role:user'])
    ->prefix('user')
    ->name('user.')
    ->group(function () {

    Route::get('/dashboard', [UserDashboardController::class, 'index'])->name('dashboard');

    // Profile
    Route::prefix('profile')->name('profile.')->group(function () {
        Route::get('/', [UserProfileController::class, 'index'])->name('index');
        Route::get('/edit', [UserProfileController::class, 'edit'])->name('edit'); 
        Route::put('/', [UserProfileController::class, 'update'])->name('update');
    });

    // Resolutions
    Route::resource('resolutions', UserResolutionController::class);

    // Feedbacks (User)
    Route::prefix('feedback')->name('feedback.')->group(function () {
        Route::get('/', [UserFeedbackController::class, 'index'])->name('index');
        Route::get('/{resolution}/create', [UserFeedbackController::class, 'create'])->name('create');
        Route::post('/{resolution}', [UserFeedbackController::class, 'store'])->name('store');
        Route::get('/view/{feedback}', [UserFeedbackController::class, 'show'])->name('show');
        Route::get('/reply/{feedback}', [UserFeedbackController::class, 'replyForm'])->name('reply');
        Route::post('/reply/{feedback}', [UserFeedbackController::class, 'storeReply'])->name('storeReply');
    });

    // Updates (User)
    Route::prefix('updates')->name('updates.')->group(function () {
        Route::get('/', [UserUpdatesController::class, 'index'])->name('index');
        Route::get('/{update}', [UserUpdatesController::class, 'show'])->name('show');
    });
});
