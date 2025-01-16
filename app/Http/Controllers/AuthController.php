<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;

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
        // Menangkap data login yang diterima dari form
        Log::info('Login Data:', $request->all());

        $login = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($login)) {
            $request->session()->regenerate();
            Log::info('Sesi berhasil diperbarui untuk user:', ['user' => Auth::user()]);
            // Tambahkan log untuk memverifikasi bahwa login berhasil
            Log::info('Login berhasil untuk user:', ['user' => Auth::user()]);
            $redirectTo = route('dashboard');  // Ganti dengan URL tujuan yang sesuai
            Log::info('Pengguna diarahkan ke:', ['url' => $redirectTo]);
            return redirect()->intended($redirectTo)->with('success', 'Welcome!');
        }

        // Log jika autentikasi gagal
        Log::warning('Login gagal untuk user:', ['email' => $request->email]);

        return back()->withErrors([
            'email' => 'Authentikasi tidak sesuai!',
        ])->onlyInput('email');
    }
}
