<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create() {
        return view('register.create');
    }

    public function store() {
        //create the user
        $attributes = request()->validate([
            'name' => 'required|max:255|min:3',
            'username' => 'required|unique:users,username|max:255|min:3',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:7|max:255',
        ]);

        $User = User::create($attributes);

        auth()->login($User);

        return redirect('/')->with('success', 'Your account has been created.');

    }
}
