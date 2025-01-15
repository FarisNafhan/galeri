<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function landing()
    {
        return view('galeri.home.landing');
    }
    public function home()
    {
        return view('galeri.home.dashboard');
    }
}
