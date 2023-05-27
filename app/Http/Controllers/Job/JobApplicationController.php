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
    public function create()
    {
        $job = JobAdding::all();
        return view('users.pages.jobs.create', compact('job'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $job = JobAdding::all();
        $company = Company::all();

        // Validate the submitted application data
        $validatedData = $request->validate([
            'cover_letter' => 'required',
            'resume' => 'required|mimes:pdf|max:2048', // Only allow PDF files up to 2MB
        ]);

        // Create a new job application instance
        $jobApplication = new JobApplication();
        $jobApplication->job_id = $job->id;
        $jobApplication->user_id = Auth::id();
        $jobApplication->company_id = $company->id;
        $jobApplication->cover_letter = $validatedData['cover_letter'];

        // Upload and store the resume file
        if ($request->hasFile('resume')) {
            $resumePath = $request->file('resume')->store('resumes', 'public');
            $jobApplication->resume = $resumePath;
        }

        // Save the job application to the database
        $jobApplication->save();

        // Redirect to the desired job page after successful application submission
        return redirect()->route('job.show', $job->id)->with('success', 'Application submitted successfully!');

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
