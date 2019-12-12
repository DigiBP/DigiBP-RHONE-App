<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Patient;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
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
