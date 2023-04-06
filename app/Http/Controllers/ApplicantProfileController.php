<?php

namespace App\Http\Controllers;

use App\Models\ApplicantProfile;
use App\Models\Education;
use App\Models\Experience;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ApplicantProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $user = Auth::User();
        $applicants = User::join('applicant_profiles', 'users.id', '=', 'applicant_profiles.user_id')
            ->where('user_id', $user->id)
            ->get(['applicant_profiles.*', 'users.name', 'users.phone']);
        // $education = $applicants->educations;
        //dd($applicants);

        return view('backend.layouts.topbar', compact('applicants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //echo "test create";
        return view('backend.pages.applicant.create');
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

        if ($request->hasfile('resume')) {

            // if($request->resume){
            //     $prv_file = public_path().'/'.$request->resume;
            //     unlink($prv_file);
            // }

            $file = $request->resume;
            $fileExtension = $file->extension();
            $file_name = 'resume' . '' . time() . '.' . $fileExtension;
            Storage::disk('public')->put('resume/' . $file_name, File::get($file));

            $file_path = 'storage/resume/' . $file_name;

        } else {
            $file_path = '';
        }

        $applicant->resume = $file_path;
        $applicant->dob = $request->dob;
        $applicant->job_experience = $request->job_experience;
        $applicant->gender = $request->gender;
        //$applicant->resume = $request->resume;
        $applicant->skill = $request->skill;
        //dd($applicant);
        $applicant->save();

        //session()->flash('message', 'Successfully Save Your Information.');
        foreach ($request->exam as $key => $value) {
            $educations = new Education;
            $educations->applicant_id = $applicant->id;
            $educations->exam = $value;
            $educations->result = $request->result[$key];
            $educations->instituations = $request->instituations[$key];

            $educations->passing_year = $request->passing_year[$key];
            // dd($educations);
            $educations->save();
        }
        foreach ($request->title as $key => $value) {
            $experience = new Experience();
            $experience->applicant_id = $applicant->id;
            $experience->title = $value;
            $experience->start_date = $request->start_date[$key];
            $experience->end_date = $request->end_date[$key];
            $experience->company = $request->company[$key];
            // dd($educations);
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
    public function show($id)
    {
        $applicant = ApplicantProfile::findOrFail($id);
        $education = $applicant->educations;
        $experience = $applicant->experiences;

        $users = ApplicantProfile::findOrFail($id);
        $user = $users->user;
        // dd($user);

        //dd($experience);

        return view('backend.pages.applicant.details_list', compact('applicant', 'education', 'experience', 'user'));
    }
    public function allapplicants()
    {
        // $applicant = ApplicantProfile::findOrFail($id);
        //$applicants = ApplicantProfile::all();
        // $user = Auth::User();
        // $applicants['data'] = ApplicantProfile::where('user_id', $user->id)->get();
        $user = Auth::User();
        $applicants = User::join('applicant_profiles', 'users.id', '=', 'applicant_profiles.user_id')
            ->where('user_id', $user->id)
            ->get(['applicant_profiles.*', 'users.name', 'users.phone']);
        // $education = $applicants->educations;
        //dd($applicants);

        return view('backend.pages.applicant.all_applicants', compact('applicants'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ApplicantProfile  $applicantProfile
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $applicantProfile = ApplicantProfile::find($id);
        return view('backend.pages.applicant.edit', compact('applicantProfile'));

        // return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ApplicantProfile  $applicantProfile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $applicant = ApplicantProfile::find($id);

        $applicant->phone = $request->phone;
        $applicant->present_address = $request->present_address;
        $applicant->permanent_address = $request->permanent_address;
        $applicant->expected_salary = $request->expected_salary;
        $applicant->present_salary = $request->present_salary;
        // Storage::putFile('public', $request->resume, env('public'));
        // $image_path = $request->file('resume')->store('', 'public');
        // $applicant->resume = $image_path;
        // $fileName = time() . $request->file('resume')->getClientOriginalName();
        // $path = $request->file('resume')->storeAs('', $fileName, 'public');
        $applicant->resume = '25';

        $applicant->dob = $request->dob;
        $applicant->job_experience = $request->job_experience;
        $applicant->gender = $request->gender;
        $applicant->resume = $request->resume;
        $applicant->skill = $request->skill;
        //dd($applicant);
        $applicant->save();

        //session()->flash('message', 'Successfully Save Your Information.');
        foreach ($request->exam as $key => $value) {
            $educations = new Education;
            $educations->applicant_id = $applicant->id;
            $educations->exam = $value;
            $educations->result = $request->result[$key];
            $educations->instituations = $request->instituations[$key];

            $educations->passing_year = $request->passing_year[$key];
            // dd($educations);
            $educations->save();
        }
        foreach ($request->title as $key => $value) {
            $experience = new Experience();
            $experience->applicant_id = $applicant->id;
            $experience->title = $value;
            $experience->start_date = $request->start_date[$key];
            $experience->end_date = $request->end_date[$key];
            $experience->company = $request->company[$key];
            // dd($educations);
            $experience->save();
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ApplicantProfile  $applicantProfile
     * @return \Illuminate\Http\Response
     */
    public function destroy(ApplicantProfile $applicantProfile)
    {
        // echo "deleted";
        $applicantProfile->delete();
        return redirect()->back();
    }
}
