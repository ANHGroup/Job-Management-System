<?php

namespace App\Http\Controllers\Job;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JobPosting;

class JobPostingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobPostings = JobPosting::all();
        return view('admin.pages.jobs.index', compact('jobPostings'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('job-postings.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'company_id' => 'required',
            'location' => 'required',
            'salary' => 'required',
            'requirements' => 'required',
        ]);

        JobPosting::create($request->all());

        return redirect()->route('job-postings.index')
            ->with('success', 'Job posting created successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(JobPosting $jobPosting)
    {
        return view('job-postings.show', compact('jobPosting'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JobPosting $jobPosting)
    {
        return view('job-postings.edit', compact('jobPosting'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, JobPosting $jobPosting)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'company_id' => 'required',
            'location' => 'required',
            'salary' => 'required',
            'requirements' => 'required',
        ]);

        $jobPosting->update($request->all());

        return redirect()->route('job-postings.index')
            ->with('success', 'Job posting updated successfully.');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JobPosting $jobPosting)
    {
        $jobPosting->delete();

        return redirect()->route('job-postings.index')
            ->with('success', 'Job posting deleted successfully.');

    }
}
