<?php

namespace App\Http\Controllers\En;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('main.about-us');
    }

    public function calendar()
    {
        return view('main.calendar');
    }
}
