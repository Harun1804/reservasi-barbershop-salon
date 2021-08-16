<?php

namespace App\Http\Controllers\Pelanggan;

use App\Http\Controllers\Controller;
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
}
