<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {
    }

    public function destroy()
    {
        auth()->logout();

        return redirect("/");
    }
}
