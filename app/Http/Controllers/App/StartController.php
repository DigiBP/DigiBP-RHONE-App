<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use Carbon\Carbon;

class StartController extends Controller
{
    public function index()
    {
        $register_icon = config('app.url') . '/images/register.png';

        $minimum_age = Carbon::today()->subYear(18)->toDateString();

        return view('app.start', compact('register_icon','minimum_age'));
    }
}
