<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Helpers\CekRole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            $request->session()->regenerate();
            return CekRole::cek(Auth::user()->role);
        }else{
            return redirect()->back()->with('danger','Gagal Login Cek Kembali Username dan Password Anda');
        }
    }

    //tambahkan script di bawah ini 
    public function handleProviderCallback(Request $request)
    {
        try {
            $user_google    = Socialite::driver('google')->user();
            $user           = User::where('email', $user_google->getEmail())->first();
        
            //jika user ada maka langsung di redirect ke halaman home
            //jika user tidak ada maka simpan ke database
            //$user_google menyimpan data google account seperti email, foto, dsb
        
            if($user != null){
                Auth::login($user, true);
                return redirect()->route('pelanggan.home');
            }else{
                $create = User::Create([
                    'email'             => $user_google->getEmail(),
                    'name'              => $user_google->getName(),
                    'password'          => 0,
                    'no_hp'             => 0,
                    'email_verified_at' => now(),
                    'token'             => 0,
                ]);
                
                        
                Auth::login($create, true);
                return redirect()->route('pelanggan.home');
            }
        
        } catch (\Exception $e) {
            return redirect()->route('login');
        }
    }
    
    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
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

    public function account()
    {
        return view('auth.profile');
    }

    public function hapusAkun(Request $request)
    {
        $user = User::find(Auth::id());
        $user->delete();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login')->with('success','Akun Telah Dihapus');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        
        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login')->with('succes','Berhasil Logout');
    }
}
