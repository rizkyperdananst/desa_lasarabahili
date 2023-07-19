<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $validate = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = request(['email', 'password']);

        if(Auth::attempt($credentials)) {
            $request->session()->regenerateToken();

            return redirect()->route('dashboard');
        } 
            return back()->withErrors([
                'error' => 'Email dan Password Salah'
            ]);
    }

    public function logout(Request $request)
    {
        $logout = Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
