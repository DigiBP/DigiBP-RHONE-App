<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;

class DiagnosisController extends Controller
{
    public function index()
    {
        return view('app.diagnosis.index');
    }
}
