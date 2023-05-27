<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\JobAdding;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
    public function index()
    {
        $jobs = JobAdding::selectRaw('COUNT(*) as count')->value('count');
        $companies  = Company::selectRaw('COUNT(*) as count')->value('count');
    
        return view('admin.pages.dashboard', compact('jobs', 'companies'))->with('user', auth()->user());
    }

}