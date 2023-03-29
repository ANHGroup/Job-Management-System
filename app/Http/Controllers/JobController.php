<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $applicant = Education::with('applicant_profiles')->get();
        // //echo $applicant;

        // return view('pages.applicant.list', compact('applicant'));
        //$all_data = json_encode($all);

        //$applicant = $app->educations;
        //  echo $all_data;
        //dd($app);

        // $applicant = $applicant->;
        // dd($applicant);
        $jobs = Job::all();
        return view('pages.index', compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        if (!Gate::allows('job.create')) {
            abort(403, "You are not allowed!");
        }
        return view('pages.job.create');
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
    public function show($id)
    {
        // echo "this is show page";
        $job = Job::find($id);

        return view('pages.job.job_details', compact('job'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit(Job $job)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Job $job)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy(Job $job)
    {
        //echo "this is delete page";

        $job->delete();
        return redirect()->back();
    }
}
