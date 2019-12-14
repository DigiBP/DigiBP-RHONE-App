<?php

namespace App\Http\Controllers\Debug;

use App\Http\Controllers\Controller;
use App\Models\Patient;

class PatientsController extends Controller
{
    public function index()
    {
        $patients = Patient::with('user')->orderBy('created_at', 'desc')->get();

        return view('debug.patients.index', compact('patients'));
    }

    public function approve(Patient $patient)
    {
        $client = new \GuzzleHttp\Client();

        $url = route('api.registration.approve');

        $response = $client->post($url, [
            'form_params' => [
                'uuid' => $patient->uuid
            ]
        ]);

        return back();
    }

    public function decline(Patient $patient)
    {

        $client = new \GuzzleHttp\Client();

        $url = route('api.registration.decline');

        $response = $client->post($url, [
            'form_params' => [
                'uuid' => $patient->uuid
            ]
        ]);

        return back();

    }


    public function delete(Patient $patient)
    {
        $patient->user->delete();

        flash('Patient deleted!');

        return back();
    }
}
