<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        dd($request->all());
    }

    public function pelanggan()
    {
        return view('auth.pelanggan');
    }

    public function konfirmasi()
    {
        return view('auth.confirmation');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('succes','Berhasil Logout');
    }
}
