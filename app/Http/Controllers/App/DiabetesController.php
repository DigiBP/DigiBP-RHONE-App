<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;

class DiabetesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = auth()->user();

        return view('app.diabetes.index.index', compact('user'));
    }

    public function update()
    {
        return redirect()->route('dashboard.index');
    }
}
