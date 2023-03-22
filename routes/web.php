<?php

use App\Http\Controllers\AllAplicantController;
use App\Http\Controllers\ApplicantProfileController;
use App\Http\Controllers\backend\CompanyProfileController;
use App\Http\Controllers\backend\DashBoardController;
use App\Http\Controllers\backend\JobManageController;
use App\Http\Controllers\backend\JobPostController;
use App\Http\Controllers\backend\MessageController;
use App\Http\Controllers\backend\PackageController;
use App\Http\Controllers\backend\ResumeAlertController;
use App\Http\Controllers\backend\ShortlistController;
use App\Http\Controllers\backend\UpdatePassController;
use App\Http\Controllers\frontend\BlogController;
use App\Http\Controllers\frontend\CandidateController;
use App\Http\Controllers\frontend\EmployerController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\UserLogOut;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Jobs
// Route::resource('job', JobController::class);

//Employer
Route::resource('employer', EmployerController::class);

//Candidate
Route::resource('candidate', CandidateController::class);

//Blog
Route::resource('blog', BlogController::class);

//User LogOut
Route::get('users/logout', [UserLogOut::class, 'logOut'])->name('userLogout');

//Update Password
Route::resource('update_password', UpdatePassController::class);

//DashBoard
Route::resource('backDashboard', DashBoardController::class);

//Company
Route::resource('company_profile', CompanyProfileController::class);

//Job
Route::resource('job_post', JobPostController::class);
Route::resource('job_manage', JobManageController::class);

//Aplicants
Route::resource('all_aplicants', AllAplicantController::class);

//Resumes
Route::resource('shortlisted_resumes', ShortlistController::class);
Route::resource('resumes_alert', ResumeAlertController::class);

//Package
Route::resource('package', PackageController::class);

//Message
Route::resource('message', MessageController::class);
//Applicant Profile
Route::resource('applicant', ApplicantProfileController::class);
//Job
Route::resource('job', JobController::class);
