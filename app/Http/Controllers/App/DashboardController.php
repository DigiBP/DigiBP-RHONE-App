<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $user = auth()->user();

        return view('app.dashboard.index', compact('user'));
    }
}
