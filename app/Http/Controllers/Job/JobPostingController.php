<?php

namespace App\Http\Controllers\Job;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JobAdding;

class JobPostingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobPostings = JobAdding::all();
        return view('admin.pages.jobs.index', compact('jobPostings'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.jobs.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'company_id' => 'required',
            'location' => 'required',
            'salary' => 'required',
            'requirements' => 'required',
        ]);

        JobAdding::create($validatedData);

        return redirect()->route('job-postings.index')
            ->with('flash_notification.message', 'Job Added Successfully.')
            ->with('flash_notification.level', 'success');


    }

    /**
     * Display the specified resource.
     */
    public function show(JobAdding $jobPosting)
    {
        return view('admin.pages.jobs.show', compact('jobPosting'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JobAdding $jobPosting)
    {
        return view('admin.pages.jobs.edit', compact('jobPosting'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, JobAdding $jobPosting)
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
            ->with('flash_notification.message', 'Job Updated Successfully.')
            ->with('flash_notification.level', 'success');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JobAdding $jobPosting)
    {
        $jobPosting->delete();

        return redirect()->route('job-postings.index')
            ->with('flash_notification.message', 'Job deleted Successfully.')
            ->with('flash_notification.level', 'danger');

    }
}
