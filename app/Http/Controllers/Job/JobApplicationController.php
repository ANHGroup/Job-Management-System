<?php

namespace App\Http\Controllers\Job;

use App\Http\Controllers\Controller;
use App\Models\JobAdding;
use Illuminate\Http\Request;
use App\Models\JobApplication;
use App\Models\Company;
use Illuminate\Contracts\Queue\Job;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class JobApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(JobAdding $jobPosting)
    {
        // $job = JobAdding::find();
        
        return view('users.pages.jobs.create');
    }
   
    public function showApplicationForm($jobPostingId)
    {
        $jobPosting = JobAdding::find($jobPostingId);
        if (!$jobPosting) {
            abort(404); // Or handle the case when the job posting is not found
        }
        return view('users.pages.jobs.create', compact('jobPosting'));
    }
    /**
 * Store a newly created resource in storage.
 */
    public function store(Request $request)
    {
        $resumePath = $request->file('resume')->store('resumes', 'public');
        $jobApplication = new JobApplication();
        $jobApplication->name = Auth::user()->name;
        $jobApplication->email = Auth::user()->email;
        $jobApplication->phone = $request->phone;
        $jobApplication->year_of_experience = $request->year_of_experience;
        $jobApplication->job_id = $request->job_id;
        $jobApplication->user_id = Auth::user()->id;
        $jobApplication->company_id = $request->company_id;
        $jobApplication->cover_letter = $request->cover_letter;
        $jobApplication->resume = $resumePath;


        $jobApplication->save();
        return redirect()->back()
                    ->with('flash_notification.message', 'Application submitted successfully!')
                    ->with('flash_notification.level', 'success');


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $job = JobAdding::findOrFail($id);
        return view('users.pages.jobs.show', compact('job'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
