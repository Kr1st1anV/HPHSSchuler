<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rule;
use App\Notifications\WelcomeNotifications;

class RegisterController extends Controller
{
    public function create() 
    {
        return view('register.create');
    }
    public function store() 
    {
        $attributes = request()->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3' , 'max:255', Rule::unique('users', 'username')],
            'email' => ['required', 'email' , 'max:255', Rule::unique('users', 'email')],
            'phone_number' => ['required','min:10', 'max:11', Rule::unique('users', 'phone_number')],
            'password' => 'required|min:7|max:255',
        ]); 

        $user = User::create($attributes);

        auth()->login($user);

        //$user->notify(new WelcomeNotifications);

        return redirect('/')->with('success', 'Your account has been created.');;
    }
}
