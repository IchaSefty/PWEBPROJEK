<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index() {
        return view('login');
    }

    public function register() {
        return view('register');
    }

    public function proses_login(Request $request) {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard');
        }

        return redirect('login')->withErrors(['login_gagal' => 'Invalid credentials']);
    }

    public function proses_register(Request $request) {
        $request->validate([
            'name' => 'required',
            'username' => 'required|unique:users',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $request['password'] = Hash::make($request->password);
        User::create($request->all());

        return redirect()->route('login');
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect('login');
    }
}
