<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $rules = [
            'email' => 'required',
            'password' => 'required',
        ];

        $messages = [
            'email.required' => 'Email Wajib Diisi',
            'password.required' => 'Password Wajib Diisi',
        ];

        $request->validate($rules, $messages);
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Jika auth berhasil maka redirect
            return redirect('/admin');
        } else {
            // Jika Gagal
            return redirect('/login')->withErrors([
                'login' => 'Email atau Password salah.',
            ]);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function formReg(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:191',
            'email' => 'required|email',
            'password' => 'required|min:6',
        ],
        [
            'email.required' => 'Email Wajib Diisi',
            'password.min' => 'Password Minimal 6 Karakter',
        ]);

        $data['password'] = bcrypt($data['password']);

        User::create($data);
        // dd($data);
        return redirect('/login');
    }
}
