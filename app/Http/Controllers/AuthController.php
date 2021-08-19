<?php

namespace App\Http\Controllers;

use App\Helpers\CekRole;
use App\Models\User;
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
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            return CekRole::cek(Auth::user()->role);
        }else{
            return redirect()->back()->with('danger','Gagal Login Cek Kembali Username dan Password Anda');
        }
    }

    public function pelanggan()
    {
        return view('auth.pelanggan');
    }

    public function mitra()
    {
        return view('auth.mitra');
    }

    public function konfirmasi()
    {
        return view('auth.confirmation');
    }

    public function verify($token)
    {
        $user = User::where('token',$token)->first();
        if($user){
            $user->email_verified_at = now();
            $user->save();

            return redirect()->route('login')->with('success','Akun Telah Diverifikasi');
        }else{
            return redirect()->route('login')->with('danger','Verifikasi Gagal');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('succes','Berhasil Logout');
    }
}