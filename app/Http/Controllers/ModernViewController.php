<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModernViewController extends Controller
{
    public function dashboard()
    {
        return view('panel.modern');
    }

    public function login()
    {
        return view('auth.modern-login');
    }
}
