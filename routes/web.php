<?php
use App\Http\Controllers\ApplicantProfileController;
use App\Http\Controllers\AppliedJobController;
use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

Auth::routes();

// Route::post('/logout', [ApplicantProfileController::class, 'logout'])->name('logout');
/* All Jobs start */
Route::get('/', [JobController::class, 'index'])->name('index');
Route::get('/recentJobs', [JobController::class, 'recentJobs'])->name('recentJobs');

/* All Jobs end */
Route::group(['middleware' => 'auth'], function () {
    /* User type wise authentication user type 1 for admin ,0 for user */
    // Route::get('/admin', [LoginController::class, 'index']);
    // Route::get('/create', [LoginController::class, 'create']);
    /* Applicant profile start */
    Route::resource('applicant', ApplicantProfileController::class);
    Route::get('/all-applicants', [ApplicantProfileController::class, 'allapplicants'])->name('allapplicants');
    /*Job Applied start */
    Route::resource('appliedjob', AppliedJobController::class);
    Route::get('/apply-job', [AppliedJobController::class, 'applyjob'])->name('applyjob');
    // Job Post
    Route::resource('job', JobController::class);

});
