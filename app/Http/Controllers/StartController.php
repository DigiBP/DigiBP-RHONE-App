<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

class StartController extends Controller
{

    public function index()
    {
        $register_icon = config('app.url') . '/images/register.png';

        $minimum_age = Carbon::today()->subYear(18)->toDateString();

        return view('start', compact('register_icon','minimum_age'));
    }
}
