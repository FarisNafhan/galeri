<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function login()
    {
        return view('galeri.auth.login');
    }
    public function register()
    {
        return view('galeri.auth.register');
    }
    public function landing()
    {
        return view('galeri.home.landing');
    }
    public function home()
    {
        return view('galeri.home.dashboard');
    }
    public function MyGalery()
    {
        return view('galeri.konten.MyGalery');
    }
    public function addAlbum()
    {
        return view('galeri.konten.Album');
    }
}
