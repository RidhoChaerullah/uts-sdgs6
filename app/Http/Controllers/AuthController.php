<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showRegister()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login')->with('success', 'Registrasi berhasil. Silakan login.');
    }

    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended(route('articles.index'))
                ->with('success', 'Selamat datang, ' . Auth::user()->name . ' 👋');
        }

        return back()->with('error', 'Akun tidak ditemukan atau password salah. Silakan coba lagi.');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }

    public function profile()
    {
        return view('auth.profile', ['user' => Auth::user()]);
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . Auth::id(),
        ]);

        $user = Auth::user();

        if ($user) {
            $user->update($request->only('name', 'email'));
            return back()->with('success', 'Profil berhasil diperbarui');
        }

        return back()->withErrors(['user' => 'Gagal memperbarui profil.']);
    }


    public function destroy(Request $request)
    {
        $user = Auth::user();

        if ($user) {
            Auth::logout(); // logout dulu tapi simpen datanya
            $request->session()->invalidate();
            $request->session()->regenerateToken();

            $user->delete(); // baru delete setelah itu

            return redirect('/')->with('success', 'Akun berhasil dihapus');
        }

        return redirect('/')->withErrors(['user' => 'Gagal menghapus akun.']);
    }
}
