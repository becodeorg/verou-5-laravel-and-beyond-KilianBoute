<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {
        return view("register.create");
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'password' => ['required', 'max:255']
        ]);

        User::create($request->all());

        return redirect('/')->with('success', 'Account created successfully');
    }
}
