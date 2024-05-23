<?php

<<<<<<< HEAD
use App\Http\Controllers\AnhJobController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
=======
>>>>>>> parent of 6fc4676 (Merge pull request #42 from ANHGroup/mohib)
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
<<<<<<< HEAD

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::resource('/anh-jobs', AnhJobController::class);
=======
>>>>>>> parent of 6fc4676 (Merge pull request #42 from ANHGroup/mohib)
