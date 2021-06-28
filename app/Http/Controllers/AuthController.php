<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }

    public function proses_login(Request $request)
    {
        request()->validate([
        'name' => 'required',
        'password' => 'required',
        ]);

        $credentials = $request->only('name', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard-admin');
        }
        return redirect('admin')->withSuccess('Oppes! Silahkan Cek Inputanmu');
    }
    public function logout(Request $request) {
        $request->session()->flush();
        Auth::logout();
        return Redirect('admin');
    }
}
