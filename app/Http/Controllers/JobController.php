<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{

    public function index()
    {

        $jobs = Job::all();
        if (!Auth::check()) {

            return view('frontend.pages.index', compact('jobs'));
        } elseif (Auth::user()->type == 1) {

            return view('backend.pages.index', compact('jobs'));
        } elseif (Auth::user()->type == 0) {

            return view('frontend.pages.index', compact('jobs'));
        }

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
    public function show($id)
    {

        $job = Job::find($id);
        return view('frontend.pages.job.job_details', compact('job'));
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
