<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    // --- LOGIN LOGIC ---

    /**
     * Tampilkan form login.
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }

    /**
     * Proses login pengguna.
     */
    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Ambil data login + status remember
        $credentials = $request->only('email', 'password');
        $remember = $request->boolean('remember'); // ✅ baca checkbox remember me

        // Coba otentikasi dengan opsi remember
        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate(); // ✅ mencegah session fixation

            return redirect()->intended('/home'); // ✅ ubah sesuai route dashboard kamu
        }

        // Gagal login
        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ])->onlyInput('email');
    }

    /**
     * Logout pengguna.
     */
    public function logout(Request $request)
    {
        Auth::logout();

        // Hapus cookie
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }

    // --- REGISTER LOGIC ---

    /**
     * Tampilkan form register.
     */
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    /**
     * Proses pendaftaran pengguna baru.
     */
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
            'terms' => 'accepted'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => 1,
            'profile_picture' => 'images/profile/default.jpeg',
        ]);

        return redirect('/login')->with('success', 'Akun berhasil dibuat, silakan login.');
    }
}
