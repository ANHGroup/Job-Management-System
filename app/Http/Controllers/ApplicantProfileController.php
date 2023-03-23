<?php

namespace App\Http\Controllers;

use App\Models\ApplicantProfile;
use App\Models\Education;
use App\Models\Experience;
use Illuminate\Http\Request;

class ApplicantProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.master');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //echo "test create";
        return view('pages.applicant.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $applicant = new ApplicantProfile;

        $applicant->phone = $request->phone;
        $applicant->present_address = $request->present_address;
        $applicant->permanent_address = $request->permanent_address;
        $applicant->expected_salary = $request->expected_salary;
        $applicant->present_salary = $request->present_salary;
        $applicant->dob = $request->dob;
        $applicant->job_experience = $request->job_experience;
        $applicant->gender = $request->gender;
        $applicant->resume = $request->resume;
        $applicant->skill = $request->skill;
        // dd($applicant);
        $applicant->save();

        session()->flash('message', 'Successfully Save Your Information.');
        foreach ($request->exam as $key => $value) {
            $educations = new Education;
            $educations->applicant_id = $applicant->id;
            $educations->exam = $value;
            $educations->instituations = $request->instituations[$key];
            $educations->result = $request->result[$key];
            $educations->board = $request->board[$key];
            //dd($educations);
            $educations->save();
        }
        foreach ($request->title as $key => $value) {
            $experience = new Experience();
            $experience->applicant_id = $applicant->id;
            $experience->title = $value;
            $experience->start_date = $request->start_date[$key];
            $experience->end_date = $request->end_date[$key];
            $experience->company = $request->company[$key];
            //dd($educations);
            $experience->save();
        }

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ApplicantProfile  $applicantProfile
     * @return \Illuminate\Http\Response
     */
    public function show(ApplicantProfile $applicantProfile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ApplicantProfile  $applicantProfile
     * @return \Illuminate\Http\Response
     */
    public function edit(ApplicantProfile $applicantProfile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ApplicantProfile  $applicantProfile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ApplicantProfile $applicantProfile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ApplicantProfile  $applicantProfile
     * @return \Illuminate\Http\Response
     */
    public function destroy(ApplicantProfile $applicantProfile)
    {
        //
    }
}
