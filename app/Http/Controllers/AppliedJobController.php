<?php

namespace App\Http\Controllers;

use App\Models\AppliedJob;
use Illuminate\Http\Request;

class AppliedJobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo "Hello Index";
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AppliedJob  $appliedJob
     * @return \Illuminate\Http\Response
     */
    public function show(AppliedJob $appliedJob)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AppliedJob  $appliedJob
     * @return \Illuminate\Http\Response
     */
    public function edit(AppliedJob $appliedJob)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AppliedJob  $appliedJob
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AppliedJob $appliedJob)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AppliedJob  $appliedJob
     * @return \Illuminate\Http\Response
     */
    public function destroy(AppliedJob $appliedJob)
    {
        //
    }
}
