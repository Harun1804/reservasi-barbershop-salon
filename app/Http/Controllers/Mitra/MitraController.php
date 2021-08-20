<?php

namespace App\Http\Controllers\Mitra;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Mitra;
use App\Models\Transaksi;
use Illuminate\Support\Facades\Auth;

class MitraController extends Controller
{
    public function index()
    {
        $userID = Auth::user()->mitra->id;
        $mitra = Mitra::find($userID);
        return view('mitra.home',compact('mitra'));
    }

    public function layanan()
    {
        return view('mitra.layanan');
    }

    public function waitingList()
    {
        $userID = Auth::user()->mitra->id;
        $transaksi = Transaksi::where('status','menunggu')->get();
        return view('mitra.waiting_list',compact(['userID','transaksi']));
    }

    public function history()
    {
        $userID = Auth::user()->mitra->id;
        $transaksi = Transaksi::where('status','selesai')->get();
        return view('mitra.history',compact(['userID','transaksi']));
    }
}
