<?php

namespace App\Http\Livewire;

use App\Models\Katalog;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Layanan extends Component
{
    public $data,$namaModel,$harga,$selectedID;
    public $updateMode = false;

    public function render()
    {
        $this->data = Katalog::all();
        return view('livewire.layanan');
    }

    public function resetInput()
    {
        $this->namaModel = null;
        $this->harga = null;
    }

    public function store()
    {
        $this->validate([
            'namaModel' => 'required|string',
            'harga' => 'required|integer'
        ]);

        $mitraID = Auth::user()->mitra->id;

        Katalog::create([
            'mitra_id' => $mitraID,
            'nama_model' => $this->namaModel,
            'harga' => $this->harga
        ]);

        $this->resetInput();
    }

    public function edit($id)
    {
        $record = Katalog::findOrFail($id);
        $this->selectedID = $id;
        $this->namaModel = $record->nama_model;
        $this->harga = $record->harga;
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
            'selectedID' => 'required|numeric',
            'namaModel' => 'required|string',
            'harga' => 'required|integer'
        ]);

        if($this->selectedID){
            $record = Katalog::find($this->selectedID);
            $record->update([
                'nama_model' => $this->namaModel,
                'harga' => $this->harga
            ]);

            $this->resetInput();
            $this->updateMode = false;
        }
    }

    public function destroy($id)
    {
        if($id){
            $record = Katalog::find($id);
            $record->delete();
        }
    }
}
