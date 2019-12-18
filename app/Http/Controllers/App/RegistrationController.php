<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Http\Requests\App\SubmitRegistrationRequest;
use App\Jobs\DetermineGenderJob;
use App\Jobs\CamundaRegistrationPost;
use App\Models\User;
use App\Notifications\PatientRegistration;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Notification;

class RegistrationController extends Controller
{
    public function index()
    {
        $register_icon = config('app.url') . '/images/register.png';

        $minimum_age = Carbon::today()->subYear(18)->toDateString();

        return view('app.registration.index', compact('register_icon','minimum_age'));
    }

    public function store(SubmitRegistrationRequest $request)
    {
       $user = User::create([
          'email'  => $request->email,
       ]);

       $patient = $user->patient()->create([
        'name' => $request->name,
        'birthdate' => $request->birthdate
       ]);

       Log::info( 'uuid: ' . $patient->uuid .' name: ' . $patient->name . ' email: ' . $user->email . ' age: ' . $patient->getAge());

        if(app()->environment('production'))
        {
            CamundaRegistrationPost::dispatch($patient);
            DetermineGenderJob::dispatch($patient);
            Notification::route('slack', config('services.slack.webhooks.patients'))
                ->notify(new PatientRegistration($patient->name, $user->email, $patient->birthdate, $patient->getAge()));
        }

        flash('Registration successfully submitted');

       return back();

    }
}
