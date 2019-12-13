<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;

class DocumentationController extends Controller
{
    public function index()
    {
        return view('app.documentation.index');
    }
}
