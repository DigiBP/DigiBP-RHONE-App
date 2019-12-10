<?php

namespace App\Http\Controllers\Debug;

use App\Http\Controllers\Controller;
use App\Models\Patient;

class PatientsController extends Controller
{
    public function index()
    {
        $patients = Patient::orderBy('created_at','desc')->get();

        return view('debug.patients.index',compact('patients'));
    }

    public function delete(Patient $patient)
    {
        $patient->user->delete();

        flash('Patient deleted!');

        return back();
    }
}
