<?php
namespace Illuminate\Pagination\Paginator;

namespace App\Http\Controllers;

use App\Models\ApplicantProfile;
use App\Models\Job;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
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

        $role = (Auth::user())->type;
        if ($role == '1') {
            $jobs = Job::all();
            return view('backend.index', compact('jobs'));
        } elseif ($role == '0') {
            $jobs = Job::all();
            return view('frontend.index', compact('jobs'));
        }

        // $jobs = Job::all();
        // //return view('pages.index', compact('jobs'));
        // return view('frontend.index', compact('jobs'));
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
    public function create()
    {
        $jobs = Job::all();
        //return view('pages.index', compact('jobs'));
        return view('frontend.index', compact('jobs'));
        // return view('frontend.layouts.master');
    }
}
