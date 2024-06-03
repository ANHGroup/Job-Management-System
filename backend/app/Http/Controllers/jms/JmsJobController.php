<?php

namespace App\Http\Controllers\jms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jms\JmsJob;

class JmsJobController extends Controller
{
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = JmsJob::all();
        return response()->json($jobs);
    }

    public function show($id)
    {
        $job = JmsJob::findOrFail($id);
        return response()->json($job);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'company' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'salary' => 'required|numeric',
            'created_by' => 'required|exists:users,id',
        ]);

        $job = JmsJob::create($request->all());
        return response()->json($job, 201);
    }

    public function update(Request $request, $id)
    {
        $job = JmsJob::findOrFail($id);

        $request->validate([
            'title' => 'sometimes|required|string|max:255',
            'description' => 'sometimes|required|string',
            'company' => 'sometimes|required|string|max:255',
            'location' => 'sometimes|required|string|max:255',
            'salary' => 'sometimes|required|numeric',
            'created_by' => 'sometimes|required|exists:users,id',
        ]);

        $job->update($request->all());
        return response()->json($job);
    }

    public function destroy($id)
    {
        $job = JmsJob::findOrFail($id);
        $job->delete();

        return response()->json(null, 204);
    }
}
