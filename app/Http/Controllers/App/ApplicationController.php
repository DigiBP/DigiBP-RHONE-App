<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Notifications\AcceptedRegistration;
use App\Notifications\ApprovedUserRegistration;
use Illuminate\Support\Facades\Auth;

class ApplicationController extends Controller
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

    public function store()
    {
        $user = auth()->user();
        $patient = $user->patient;

        if($patient->surveys()->exists())
        {
           $unique_count = count(array_unique($patient->surveys->pluck('pivot.status')->toArray()));

           if($patient->surveys->count() < 2 || $unique_count > 1)
           {
               flash('Please finish open survey first!');

              return back();
           }

           else
           {
               $user->notify(new AcceptedRegistration($user));

               Auth::logout();

               return redirect()->route('start.index');
           }
        }

    }
}
