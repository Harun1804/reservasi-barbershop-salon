<?php

namespace App\Http\Controllers\Pelanggan;

use App\Http\Controllers\Controller;
use App\Models\Mitra;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('pelanggan.home');
    }

    public function waitingList()
    {
        return view('pelanggan.waitingList');
    }

    public function history()
    {
        return view('pelanggan.history');
    }

    public function daftar($toko)
    {
        $mitra = Mitra::where('jenis_mitra',$toko)->get();
        return view('pelanggan.daftarToko',compact('mitra'));
    }

    public function detailToko($toko,$id)
    {
        $mitra = Mitra::find($id);
        return view('pelanggan.detailToko',compact('mitra'));
    }
}
