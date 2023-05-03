<?php

namespace App\Http\Controllers;

use App\Models\ApplicantProfile;
use App\Models\AppliedJob;
use App\Models\Job;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{

    public function index()
    {
        $recentJobs = Job::where('created_at', '>=', date('Y-m-d', strtotime('-30 days')))
            ->count();
        //dd($recentJobs);
        $jobs = Job::paginate(10);
        if (!Auth::check()) {

            return view('frontend.pages.index', compact('jobs', 'recentJobs'));
        } elseif (Auth::user()->type == 1) {

            return view('backend.pages.index', compact('jobs', 'recentJobs'));
        } elseif (Auth::user()->type == 0) {

            return view('frontend.pages.index', compact('jobs', 'recentJobs'));
        }

    }
    public function categories($job_id)
    {
        $job = AppliedJob::all()->where('job_id');
        //$applied = $job->jobs;
        dd($job);
    }
    public function recentJobs()
    {
        //$recentJobs = date('Y-m-d H:i:s');

// Count the jobs that were created within the last 7 days
        $recentJobs = Job::where('created_at', '>=', date('Y-m-d H:i:s', strtotime('-30 days')))
            ->count();
        // dd($recentJobs);
        return view('frontend.pages.index', compact('recentJobs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        // if (!Gate::allows('backend.pages.job.create')) {
        //     abort(403, "You are not allowed!");
        // }
        return view('backend.pages.job.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $job = new Job;
        $job->title = $request->title;
        $job->salary_range = $request->salary_range;
        $job->description = $request->description;
        $job->job_category = $request->job_category;
        $job->job_experience = $request->job_experience;
        $job->job_qualification = $request->job_qualification;
        $job->job_deadline = $request->job_deadline;
        $job->gender = $request->gender;
        $job->location = $request->location;
        //dd($job);

        $job->save();

        session()->flash('message', 'Successfully Save Your Information.');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function jobdetails($id)
    {

        $job = Job::find($id);
        return view('frontend.pages.job.job_details', compact('job'));
    }
    public function applicantlist($id)
    {
        // $job = Job::with('applied_jobs.applicant_profiles.users')->find($id)->toArray();
        $applicant_ids = AppliedJob::where('job_id', $id)->pluck('applicant_id');
        $jobs = ApplicantProfile::with('users')->WhereIn('id', $applicant_ids)->get();
        // $applicant = $applicant_list->dob;
        // echo '<pre>';
        // print_r($applicant_list);

        //dd($job);
        return view('backend.pages.job.candidates', compact('jobs'));
    }
    public function edit(Job $job)
    {
        //
    }

    public function update(Request $request, Job $job)
    {
        //
    }

    public function destroy(Job $job)
    {
        //echo "this is delete page";

        $job->delete();
        return redirect()->back();
    }
}
