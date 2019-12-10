<?php

namespace App\Http\Controllers\Debug;

use App\Http\Controllers\Controller;
use App\Models\Patient;

class PatientsController extends Controller
{
    public function index()
    {
        $patients = Patient::with('user')->orderBy('created_at','desc')->get();

        return view('debug.patients.index',compact('patients'));
    }

    public function approve(Patient $patient)
    {
        try {

            $client = new \GuzzleHttp\Client();

            $url = route('api.registraiton.approve');

            $response = $client->post($url, [
                'form_params' => [
                    'uuid' => $patient->uuid
                ]
            ]);
        }
        catch (\Exception $exception)
        {
        }

        return back();
    }

    public function decline(Patient $patient)
    {
        try {

            $client = new \GuzzleHttp\Client();

            $url = route('api.registraiton.decline');

            $response = $client->post($url, [
                'form_params' => [
                    'uuid' => $patient->uuid,
                    'reason' => 'Someone has manually declined your request!'
                ]
            ]);

            sleep(3);
        }
        catch (\Exception $exception)
        {
        }

        return back();

    }


    public function delete(Patient $patient)
    {
        $patient->user->delete();

        flash('Patient deleted!');

        return back();
    }
}
