<?php

namespace App\Http\Livewire\Profile;

use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use App\Models\Mitra as modelMitra;
use Illuminate\Support\Facades\Auth;

class Mitra extends Component
{
    use WithFileUploads;

    public $alamat,$deskripsi,$mitraID,$image;
    public $editmode = false;

    public function edit()
    {
        $this->editmode = true;
    }

    public function simpan()
    {
        if ($this->image) {
            $randomName = Str::random(10);
            $avatar = $this->image;
            $fileName = $randomName.'.'.$avatar->getClientOriginalExtension();
    
            $fullname = $avatar->storeAs('assets/profile/toko',$fileName,'public');
    
            modelMitra::find($this->mitraID)->update([
                'alamat' => $this->alamat,
                'deskripsi' => $this->deskripsi,
                'thumbnail' => $fullname
            ]);
        }else{
            modelMitra::find($this->mitraID)->update([
                'alamat' => $this->alamat,
                'deskripsi' => $this->deskripsi
            ]);
        }

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
