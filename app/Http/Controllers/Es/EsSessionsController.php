<?php

namespace App\Http\Controllers\Es;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Validation\ValidationException;

class EsSessionsController extends Controller
{
    public function create()
    {
        return view('es.sessions.create');
    }

    public function store()
    {
        App::setLocale('es');
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (! auth()->attempt($attributes)) {
            throw ValidationException::withMessages([
                'email' => 'No se pudo verificar la información dada'
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
