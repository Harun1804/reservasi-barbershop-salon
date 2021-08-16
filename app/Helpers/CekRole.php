<?php

namespace App\Helpers;

class CekRole 
{
    public static function cek($role)
    {
        if ($role === 'pelanggan') {
            return redirect()->route('pelanggan.home');
        }else{
            return "Halaman Mitra";
        }
    }
}