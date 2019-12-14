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

    public function update()
    {
        $patient = auth()->user()->patient;

        switch ($patient->gender) {
            case Patient::GENDER_MALE:
                $gender = Patient::GENDER_FEMALE;
                break;
            case Patient::GENDER_FEMALE:
                $gender = Patient::GENDER_MALE;
                break;
            default;
                $gender = $this->randomGender();
        }

        $patient->update([
            'gender' => $gender
        ]);

        return back();
    }

    protected function randomGender()
    {
        $available_genders = [
            Patient::GENDER_MALE,
            Patient::GENDER_FEMALE
        ];

        $randomized_index = array_rand($available_genders);

        return $available_genders[$randomized_index];

    }
}
