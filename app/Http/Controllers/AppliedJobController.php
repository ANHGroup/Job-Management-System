<?php

namespace App\Http\Controllers;

use App\Models\AppliedJob;
use App\Models\Job;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

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
        return view('backend.pages.appliedjobs.list', compact('candidate'));

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
            'salary' => 'required|min:4',
            'jobId' => ['required' |
                Rule::unique('jobs', 'job_id')
                    ->join('applicant_profiles', 'jobs.id', '=', 'applicant_profiles.id'),
            ],
        ]);
        request()->validate([

        ]);

        $applied_job = new AppliedJob;
        $applied_job->salary = $request->salary;
        $applied_job->applicant_id = Auth::user()->id;
        $applied_job->job_id = $request->job_id;
        //dd($applied_job);
        // $result = $applied_job->save();
        // if ($result < 2) {
        //     echo "you have already applied!";
        // }
        $applied_job->save();
        return redirect()->back();
        // if ($applied_job->save()) {
        //     session()->flash('success', 'Your online applied successfully.');
        //     return redirect()->back();
        // } else {
        //     echo "you have already applied!";
        //     return redirect()->back();
        // }
        // $user = auth()->user();

        // $existingApplication = AppliedJob::where('applicant_id', $user->id)
        //     ->where('job_id', $applied_job->job_id)
        //     ->first();

        // if ($existingApplication) {
        //     echo 'error', 'You have already applied for this post.';
        // }
        // session()->flash('success', 'Your online applied successfully.');
        // return redirect()->back();
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
