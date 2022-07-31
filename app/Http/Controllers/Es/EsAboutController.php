<?php

namespace App\Http\Controllers\Es;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EsAboutController extends Controller
{
    public function index()
    {
        return view('es.main.about-us');
    }

    public function calendar()
    {
        return view('es.main.calendar');
    }
}
