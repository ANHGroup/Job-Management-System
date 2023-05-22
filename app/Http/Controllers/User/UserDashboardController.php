<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('users.pages.dashboard')->with('user', auth()->user());

    }

    /**
     * Show the form for creating a new resource.
     */

}
