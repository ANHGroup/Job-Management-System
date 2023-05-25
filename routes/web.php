<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AminLoginController;
use App\Http\Controllers\Admin\AminRegistrationController;
use App\Http\Controllers\Admin\AdminLogoutController;
use App\Http\Controllers\Job\JobPostingController;
use App\Http\Controllers\Job\CompanyController;
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
Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->group(function () {
    Route::name('admin.')->group(function () {
        Route::resource('login', AminLoginController::class)->only(['index', 'store']);
        Route::resource('registration', AminRegistrationController::class)->only(['index', 'store']);
        Route::get('logout', [AdminLogoutController::class, 'index'])->name('admin.logout');
        Route::get('dashboard', [AdminDashboardController::class, 'index'])
            ->middleware('admin')
            ->name('dashboard');
    });
});


//Normal User Profiles
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Job route
Route::resource('job-postings', JobPostingController::class)->middleware('admin');

//Companies route
Route::resource('companies', CompanyController::class)->middleware('admin');


require __DIR__.'/auth.php';
