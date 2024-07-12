<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DataAdmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function dashboard()
    {
        return view('admin.adminDashboard');
    }
    public function showLoginForm()
    {
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('admin.dashboard');
        }

        // Check if email exists
        $emailExists = DataAdmin::where('email', $request->email)->exists();

        if ($emailExists) {
            return redirect()->back()->withErrors([
                'password' => 'Password yang anda masukkan salah. Periksa kembali.',
            ]);
        } else {
            return redirect()->back()->withErrors([
                'email' => 'Email tidak terdaftar. Mohon periksa kembali.',
            ]);
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('admin.login');
    }
}
