<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Method untuk menampilkan halaman login
    public function login()
    {
        return view('auth.login');
    }

    // Method untuk melakukan proses login
    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Jika berhasil login, arahkan ke halaman index
            return redirect()->route('index');
        } else {
            // Jika gagal login, arahkan kembali ke halaman login dengan pesan error
            return redirect()->route('login')->with('error', 'Email atau password salah');
        }
    }

    // Method untuk logout
    // public function logout()
    // {
    //     Auth::logout();
    //     return redirect()->route('login');
    // }
    
    // Method untuk menampilkan halaman index
    public function index()
    {
        return view('admin.index');
    }

    public function register()
    {
        return view('auth.register', [
            'title' => 'Register',
        ]);
    }

    public function process(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
            'passwordConfirm' => 'required|same:password'
        ]);

        $validated['password'] = Hash::make($request['password']);

        $user = User::create($validated);

        Alert::success('Success', 'Register user has been successfully !');
        return redirect('/login');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();
        Alert::success('Success', 'Log out success !');
        return redirect('/login');
    }
}
