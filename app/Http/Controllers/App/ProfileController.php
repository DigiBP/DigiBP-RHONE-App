<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Http\Requests\App\UpdateProfileRequest;
use App\Jobs\DetermineGenderJob;
use App\Models\Patient;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function update(UpdateProfileRequest $request)
    {
        $user = auth()->user();

        $user->patient->update([
            'name' => $request->name
        ]);

        DetermineGenderJob::dispatch($user->patient);

        sleep(1);

       return back();
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
