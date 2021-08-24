<?php

namespace App\Http\Controllers\Pelanggan;

use App\Http\Controllers\Controller;
use App\Models\Mitra;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        return view('pelanggan.home');
    }

    public function waitingList()
    {
        $id = Auth::id();
        $transaksi = Transaksi::where('user_id',$id)->where('status','menunggu')->get();
        return view('pelanggan.waitingList',compact('transaksi'));
    }

    public function history()
    {
        $id = Auth::id();
        $transaksi = Transaksi::where('user_id',$id)->where('status','selesai')->get();
        return view('pelanggan.history',compact('transaksi'));
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
