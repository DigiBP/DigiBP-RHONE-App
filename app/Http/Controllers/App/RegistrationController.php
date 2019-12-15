<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Http\Requests\App\SubmitRegistrationRequest;
use App\Jobs\DetermineGenderJob;
use App\Jobs\CamundaRegistrationPost;
use App\Models\User;
use Carbon\Carbon;

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

        DetermineGenderJob::dispatch($user->patient);

        if(app()->environment('production'))
        {
            CamundaRegistrationPost::dispatch($patient);
        }

        flash('Registration successfully submitted');

       return back();

    }
}
