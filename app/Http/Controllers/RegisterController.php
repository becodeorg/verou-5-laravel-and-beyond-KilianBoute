<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function create()
    {
        return view("register.create");
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'min:3', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'password' => ['required', 'confirmed', 'min: 5', 'max:255']
        ]);

        //    User::create($request->all());

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        auth()->login($user);

        return redirect('/')->with('success', 'Account created successfully');
    }
}
