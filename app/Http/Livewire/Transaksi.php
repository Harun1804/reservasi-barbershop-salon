<?php

namespace App\Http\Livewire;

use App\Models\DetailTransaksi;
use App\Models\Katalog;
use App\Models\Transaksi as ModelsTransaksi;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Transaksi extends Component
{
    public $mitra,$tanggal,$jam,$name;
    public $layanan = [];
    public $cart = [];
    public $reviewMode = false;

    public function updateQty($katalogID,$katalogHarga,$simpan_val)
    {
        $this->cart[$katalogID] = [
            'katalog_id' => $katalogID,
            'katalog_harga' => $katalogHarga,
            'jumlah' => $simpan_val
        ];
    }

    public function review()
    {
        $this->reviewMode = true;
        foreach ($this->cart as $c) {
            $name = Katalog::select('nama_model','id')->where('id',$c['katalog_id'])->first();
            $this->name = $name;
        }
    }

    public function submit()
    {
        $userID = Auth::id();

        $transaksi = ModelsTransaksi::create([
            'user_id' => $userID,
            'tanggal_pesan' => $this->tanggal,
            'jam_pesan' => $this->jam,
            'status' => 'menunggu'
        ]);

        foreach ($this->cart as $c) {
            DetailTransaksi::create([
                'transaksi_id' => $transaksi->id,
                'katalog_id' => $c['katalog_id'],
                'jumlah' => $c['jumlah'],
                'total' => $c['jumlah'] * $c['katalog_harga']
            ]);
        }


        return redirect()->route('pelanggan.waiting.list');
    }
    
    public function render()
    {
        return view('livewire.transaksi');
    }
}
