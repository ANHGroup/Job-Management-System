<?php

namespace App\Http\Controllers;

use App\Models\AnhJob;
use App\Http\Requests\StoreAnhJobRequest;
use App\Http\Requests\UpdateAnhJobRequest;

class AnhJobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return "Hello";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAnhJobRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(AnhJob $anhJob)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AnhJob $anhJob)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAnhJobRequest $request, AnhJob $anhJob)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AnhJob $anhJob)
    {
        //
    }
}
