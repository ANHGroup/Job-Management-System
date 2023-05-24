<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AminLoginController;
use App\Http\Controllers\Admin\AminRegistrationController;

use App\Http\Controllers\User\UserDashboardController;

//Home route
Route::get('/', function () {
    return view('users.pages.home')->with('user', auth()->user());
});

// Normal user route
Route::middleware(['auth', 'verified'])->prefix('user')->group(function () {
    Route::get('dashboard', [UserDashboardController::class, 'index'])->name('user.dashboard');
});


// Admin route
Route::prefix('admin')->group(function () {
    Route::get('login', [AminLoginController::class, 'index'])->name('admin.login');
    Route::post('login', [AminLoginController::class, 'create'])->name('admin.login.post');
    Route::get('registration', [AminRegistrationController::class, 'index'])->name('admin.registration');
    Route::post('registration', [AminRegistrationController::class, 'store'])->name('admin.registration.post');
    Route::get('dashboard', [AdminDashboardController::class, 'index'])->middleware('admin');
});

//Normal User Profiles
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
