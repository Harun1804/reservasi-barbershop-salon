<?php

namespace App\Http\Controllers\Mitra;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MitraController extends Controller
{
    public function index()
    {
        return view('mitra.home');
    }

    public function layanan()
    {
        return view('mitra.layanan');
    }
}
