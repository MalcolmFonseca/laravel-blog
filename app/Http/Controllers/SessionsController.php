<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    public function destroy()
    {
        Auth::logout();

        return redirect('/')->with('success', 'Logged Out');
    }

    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'email' => ['required', 'email', 'max:255', Rule::exists('users', 'email')],
            'password' => ['required', 'max:255',  'min:7']
        ]);

        if (!Auth::attempt($attributes)) {
            throw ValidationException::withMessages([
                'email' => 'Credentials could not be verified'
            ]);
        }

        //prevents session fixation
        session()->regenerate();

        return redirect('/')->with('success', 'Logged In');
    }
}
