<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function auth_login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
    
        if (auth()->attempt($credentials)) {
            $request->session()->regenerate();
    
            // Ambil role pengguna
            $userRole = auth()->user()->role_id;
    
            if ($userRole === 1) {
                // Jika role admin
                return redirect()->intended('/');
            } elseif ($userRole === 2) {
                // Jika role restoran
                return redirect()->intended('/');
            } elseif ($userRole === 3) {
                // Jika role pengguna
                return redirect()->intended('/');
            }
        }

        // jika email atau password salah
        // kirimkan session error
        return back()->with('error', 'email atau password salah');
    }

    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
