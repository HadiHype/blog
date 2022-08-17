<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Nette\Schema\ValidationException;

class SessionController extends Controller
{
    public function destroy() {
        auth()->logout();

        return redirect('/')->with('success', 'GoodBye');
    }

    public function create() {
        return view('sessions.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (! auth()->attempt($attributes)) {
            throw \Illuminate\Validation\ValidationException::withMessages([
                'email' => 'Your provided credentials could not be verified.'
            ]);
        }

        session()->regenerate();

        return redirect('/')->with('success', 'Welcome Back!');
    }
}
