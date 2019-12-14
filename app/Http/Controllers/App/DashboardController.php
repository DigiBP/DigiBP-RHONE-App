<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Survey;

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

        $surveys = Survey::with('questions','questions.answers')->orderBy('availability','desc')->get();

        return view('app.dashboard.index', compact('user','surveys'));
    }
}
