<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Survey;
use Illuminate\Http\Request;

class SurveysController extends Controller
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

    public function show(Survey $survey)
    {
        return view('app.surveys.show', compact('survey'));
    }

    public function store(Survey $survey, Request $request)
    {
        dd($request->all());

        return redirect()->route('dashboard.index');
    }
}
