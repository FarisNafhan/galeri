<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register_in(Request $request)
    {
    $validator = Validator::make($request->all(), [
        'username' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users,email',
        'password' => 'required|string|min:8|confirmed',
        'telepon' => 'required|string|',
        'alamat' => 'required|string|max:255',
    ]);
    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    // dd($request->all());

    $user = User::create([
        'username' => $request->input('username'),
        'email' => $request->input('email'),
        'password' => Hash::make($request->input('password')),
        'telepon' => $request->input('telepon'),
        'alamat' => $request->input('alamat'),
    ]);
        return redirect()->route('login');
    }

    public function log_in(Request $request)
    {
        $login = $request->validate([
            'email' => 'required|email',
            'password' => 'required|password',
        ]);

        if (Auth::attempt($login)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard')->with('success', 'Welcome!');
        }

        return back()->withErrors([
            'email' => 'authentikasi tidak sesuai!',

        ])->onlyInput('email');
    }
}
