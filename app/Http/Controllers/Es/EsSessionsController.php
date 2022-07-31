<?php

namespace App\Http\Controllers\Es;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class EsSessionsController extends Controller
{
    public function create()
    {
        return view('es.sessions.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (! auth()->attempt($attributes)) {
            throw ValidationException::withMessages([
                'email' => 'Your provided information could not be verified'
            ]);
        }

        session()->regenerate();

        return redirect('/es')->with('success', 'Welcome Back!');
    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/es')->with('success', 'Goodbye!');
    }
}
