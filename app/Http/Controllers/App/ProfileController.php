<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Http\Requests\App\UpdateProfileRequest;
use App\Jobs\DetermineGenderJob;

class ProfileController extends Controller
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

    public function update(UpdateProfileRequest $request)
    {
        $user = auth()->user();

        $user->patient->update([
            'name' => $request->name
        ]);

        DetermineGenderJob::dispatch($user->patient);

       return back();
    }
}
