<?php

namespace App\Http\Controllers\Job;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companies = Company::all();
        return view('admin.pages.companies.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.companies.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $company = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
        ]);
        Company::create($company);
        return redirect()->route('companies.index')
                ->with('flash_notification.message', 'Company added Successfully.')
                ->with('flash_notification.level', 'success');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $company = Company::findOrFail($id);
        return view('admin.pages.companies.show', compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $company = Company::findOrfail($id);
        return view('admin.pages.companies.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
        ]);

        $company = Company::findOrFail($id);
        $company->update($validatedData);

        return redirect()->route('companies.index')
            ->with('flash_notification.message', 'Company updated successfully.')
            ->with('flash_notification.level', 'success');



    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $company = Company::findOrFail($id);
        $company->delete();
        return redirect()->route('companies.index')
            ->with('flash_notification.message', 'Company deleted successfully.')
            ->with('flash_notification.level', 'danger');

    }
}
