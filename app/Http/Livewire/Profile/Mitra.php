<?php

namespace App\Http\Livewire\Profile;

use App\Models\Mitra as modelMitra;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Mitra extends Component
{
    public $alamat,$deskripsi,$mitraID;
    public $editmode = false;

    public function edit()
    {
        $this->editmode = true;
    }

    public function simpan()
    {
        modelMitra::find($this->mitraID)->update([
            'alamat' => $this->alamat,
            'deskripsi' => $this->deskripsi
        ]);

        $this->editmode = false;

        session()->flash('success','Data Berhasil Diubah');
    }

    public function mount()
    {
        $mitra = Auth::user()->mitra;
        $this->deskripsi = $mitra->deskripsi;
        $this->alamat = $mitra->alamat;
        $this->mitraID = $mitra->id;
    }

    public function render()
    {
        return view('livewire.profile.mitra');
    }
}
