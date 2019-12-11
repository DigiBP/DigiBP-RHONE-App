<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Http\Requests\App\SubmitDemographyRequest;
use App\Models\Application;
use App\Models\Patient;

class DemographyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = auth()->user();

        return view('app.demography.index', compact('user'));
    }

    public function update(Patient $patient, SubmitDemographyRequest $request)
    {
        $patient->application->update([
            'demography_education' => $request->education,
            'demography_employment' => $request->employment,
            'demography_digital_apps' => $request->digital_apps,
            'demography_social_media' => $request->social_media,
            'demography_patient_communities' => $request->patient_communities,
            'demography_nutrition' => $request->nutrition,
            'demography_mobility' => $request->mobility,
        ]);

        $patient->application->update([
            'demography_status' => Application::DEMOGRAPHY_STATUS_VALIDATING
        ]);

        return redirect()->route('dashboard.index');
    }
}
