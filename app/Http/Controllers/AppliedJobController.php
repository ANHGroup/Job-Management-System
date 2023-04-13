<?php

namespace App\Http\Controllers;

use App\Models\AppliedJob;
use App\Models\Job;
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

    public function store(Request $request)
    {

        // $user = ApplicantProfile::findOrFail($request->input('applicant_id'));
        // $post = Job::findOrFail($request->input('job_id'));
        //$post = Job::find(4);

        $this->validate($request, [
            'job_id' => [
                'required',

            ],
        ]);
        $user = $request->user();
        $jobId = $request->input('job_id');
        $applicationExists = AppliedJob::where('applicant_id', $user->id)
            ->where('job_id', $jobId)
            ->exists();

        if ($applicationExists) {
            return redirect()->back()->withErrors(['You have already applied for this job!']);
        }

        $applied_job = new AppliedJob;
        $applied_job->salary = $request->salary;
        $applied_job->applicant_id = Auth::user()->id;
        $applied_job->email = Auth::user()->email;
        $applied_job->job_id = $request->job_id;
        //dd($applied_job);
        // $result = $applied_job->save();
        // if ($result < 2) {
        //     echo "you have already applied!";
        // }
        $applied_job->save();
        return redirect()->back()->with('success', 'Your application has been submitted.');

    }

    public function show($id)
    {
        $job = Job::findOrFail(1);
        $applied = $job->applied_jobs;
        dd($applied, $job);

        // $experience = $applicant->experiences;
    }

    public function edit(AppliedJob $appliedJob)
    {
        //
    }

    public function update(Request $request, AppliedJob $appliedJob)
    {
        //
    }
    public function destroy(AppliedJob $appliedJob)
    {
        //
    }
}
