<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function index()
    {
        return view("sessions.login");
    }
    public function login(Request $request)
    {
        $credentials = $request->validate([
            "name" => "required",
            "password" => "required"
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect("/");
        }

        return back()->withErrors([
            'loginError' => 'Invalid login credentials.',
        ]);
    }

    public function destroy()
    {
        auth()->logout();

        return redirect("/");
    }
}
