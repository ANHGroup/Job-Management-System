<?php

namespace App\Http\Controllers;

use App\Models\AppliedJob;
use App\Models\Job;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppliedJobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $candidate = DB::table('users')
            ->join('applicant_profiles', 'applicant_profiles.id', '=', 'users.id')
            ->join('jobs', 'jobs.id', '=', 'users.id')
            ->join('applied_jobs', 'applied_jobs.id', '=', 'users.id')

            ->get();
        // dd($candidate);
        return view('pages.appliedjobs.list', compact('candidate'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        echo "Hello Create";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // $user = ApplicantProfile::findOrFail($request->input('applicant_id'));
        // $post = Job::findOrFail($request->input('job_id'));
        //$post = Job::find(4);

        $applied_job = new AppliedJob;
        $applied_job->salary = $request->salary;
        $applied_job->applicant_id = Auth::user()->id;
        $applied_job->job_id = $request->job_id;
        //dd($applied_job);
        $applied_job->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AppliedJob  $appliedJob
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $job = Job::findOrFail(1);
        $applied = $job->applied_jobs;
        dd($applied, $job);

        // $experience = $applicant->experiences;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AppliedJob  $appliedJob
     * @return \Illuminate\Http\Response
     */
    public function edit(AppliedJob $appliedJob)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AppliedJob  $appliedJob
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AppliedJob $appliedJob)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AppliedJob  $appliedJob
     * @return \Illuminate\Http\Response
     */
    public function destroy(AppliedJob $appliedJob)
    {
        //
    }
}
