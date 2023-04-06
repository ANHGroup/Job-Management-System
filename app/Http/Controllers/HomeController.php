<?php
namespace Illuminate\Pagination\Paginator;

namespace App\Http\Controllers;

use App\Models\ApplicantProfile;
use App\Models\Job;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $jobs = Job::all();
        //return view('pages.index', compact('jobs'));
        return view('frontend.index', compact('jobs'));
    }
    public function test()
    {
        $jobs = Job::all();
        return view('test', compact('jobs'));
    }
    public function profile()
    {

        $profile = ApplicantProfile::all();
        //dd($profile);
        return view('backend.layouts.topbar', compact('profile'));
    }
}
