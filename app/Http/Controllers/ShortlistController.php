<?php

namespace App\Http\Controllers;

use App\Models\ApplicantProfile;
use App\Models\Shortlist;
use App\Models\User;
use Illuminate\Http\Request;

class ShortlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $shortlists = User::join('shortlists', 'users.id', '=', 'shortlists.user_id')

            ->get(['shortlists.*', 'users.name', 'users.phone']);
        //dd($shortlists);
        return view('backend.pages.shortlist.list', compact('shortlists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function shortlist(Request $request, $id)
    {
        $shortList = ApplicantProfile::findOrFail($id);
        $newTask = $shortList->replicate();
        $newTask->setTable('shortlists');
        $newTask->shortlist = "yes";
        $newTask->save();
        return redirect()->back()->with('success', 'Your Shortlist has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Shortlist  $shortlist
     * @return \Illuminate\Http\Response
     */
    public function show(Shortlist $shortlist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Shortlist  $shortlist
     * @return \Illuminate\Http\Response
     */
    public function edit(Shortlist $shortlist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Shortlist  $shortlist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shortlist $shortlist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Shortlist  $shortlist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shortlist $shortlist)
    {
        //
    }
}
