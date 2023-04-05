<?php
use App\Http\Controllers\ApplicantProfileController;
use App\Http\Controllers\AppliedJobController;
use App\Http\Controllers\JobController;
use App\Models\Job;
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

//Jobs
// Route::resource('job', JobController::class);

//Employer
// Route::resource('employer', EmployerController::class);

// //Candidate
// Route::resource('candidate', CandidateController::class);

// //Blog
// Route::resource('blog', BlogController::class);

// //User LogOut
// Route::get('users/logout', [UserLogOut::class, 'logOut'])->name('userLogout');

// //Update Password
// Route::resource('update_password', UpdatePassController::class);

// //DashBoard
// Route::resource('backDashboard', DashBoardController::class);

// //Company
// Route::resource('company_profile', CompanyProfileController::class);

// //Job
// Route::resource('job_post', JobPostController::class);
// Route::resource('job_manage', JobManageController::class);

// //Aplicants
// Route::resource('all_aplicants', AllAplicantController::class);

// //Resumes
// Route::resource('shortlisted_resumes', ShortlistController::class);
// Route::resource('resumes_alert', ResumeAlertController::class);

// //Package
// Route::resource('package', PackageController::class);

// //Message
// Route::resource('message', MessageController::class);
//Applicant Profile
//Route::resource('job', JobController::class);
Route::get('/', function () {
    $jobs = Job::all();
    return view('index', compact('jobs'));
});

Auth::routes();
Route::get('/test', [App\Http\Controllers\HomeController::class, 'test'])->name('test');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/all-applicants', [ApplicantProfileController::class, 'allapplicants'])->name('allapplicants');
Route::resource('job', JobController::class);
Route::group(['middleware' => 'auth'], function () {
    Route::resource('applicant', ApplicantProfileController::class);
    Route::resource('appliedjob', AppliedJobController::class);
//Job

});
