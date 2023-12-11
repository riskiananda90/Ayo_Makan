<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedirectController extends Controller
{
    public function cek() {
        if (auth()->user()->role_id === 1) {
            // jika user admin
            return redirect('/');
        } elseif(auth()->user()->role_id === 2) {
            // jika user restoran
            return redirect('/');
        } elseif(auth()->user()->role_id === 3) {
            // jika user pengguna
            return redirect('/');
        }
    }
}
