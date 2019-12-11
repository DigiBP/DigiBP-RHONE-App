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

    public function index()
    {
        $user = auth()->user();

        return view('app.application.index', compact('user'));
    }

    public function gender(Patient $patient)
    {
        $gender = Patient::GENDER_DIVERSE;

        switch ($patient->gender) {
            case Patient::GENDER_MALE:
                $gender = Patient::GENDER_FEMALE;
        break;
            case Patient::GENDER_FEMALE:
                $gender = Patient::GENDER_MALE;
        }

        $patient->update([
           'gender' => $gender
        ]);

        return back();
    }
}
