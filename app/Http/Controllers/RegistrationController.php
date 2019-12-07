<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubmitRegistrationRequest;

use App\Models\User;

class RegistrationController extends Controller
{
    public function store(SubmitRegistrationRequest $request)
    {
       $user = User::create([
          'email'  => $request->email,
       ]);

       $user->patient()->create([
        'birthdate' => $request->birthdate
       ]);

       //Submit Patient to Camunda

    }
}
