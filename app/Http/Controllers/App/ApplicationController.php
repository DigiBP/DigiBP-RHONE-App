<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Patient;

class ApplicationController extends Controller
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

    public function submit(Patient $patient)
    {
        return back();
    }
}
