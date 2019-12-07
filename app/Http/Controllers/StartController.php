<?php

namespace App\Http\Controllers;

class StartController extends Controller
{

    public function index()
    {
        $register_icon = config('app.url') . '/images/register.png';

        return view('start', compact('register_icon'));
    }
}
