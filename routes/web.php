<?php
use App\Http\Controllers\ApplicantProfileController;
use App\Http\Controllers\AppliedJobController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Auth::routes();

// Route::post('/logout', [ApplicantProfileController::class, 'logout'])->name('logout');
Route::resource('job', JobController::class);
Route::group(['middleware' => 'auth'], function () {
    Route::get('/', [LoginController::class, 'index']);
    Route::get('/create', [LoginController::class, 'create']);
    Route::resource('applicant', ApplicantProfileController::class);
    Route::resource('appliedjob', AppliedJobController::class);
    Route::get('/all-applicants', [ApplicantProfileController::class, 'allapplicants'])->name('allapplicants');

});
