<?php

namespace App\Http\Livewire\Profile;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Pelanggan extends Component
{
    public $nohp,$email,$password,$userid;
    public $editnohp = false;
    public $editemail = false;
    public $editpassword = false;

    public function editPhone()
    {
        $this->editnohp = true;
    }

    public function editEmail()
    {
        $this->editemail = true;
    }

    public function editPassword()
    {
        $this->editpassword = true;
    }

    public function changePhone()
    {
        User::find($this->userid)->update(['no_hp' => $this->nohp]);
        $this->editnohp = false;
        session()->flash('success','Data Berhasil Diubah');
    }

    public function changeEmail()
    {
        User::find($this->userid)->update(['email' => $this->email]);
        $this->editemail = false;
        session()->flash('success','Data Berhasil Diubah');
    }

    public function changePassword()
    {
        User::find($this->userid)->update(['password' => Hash::make($this->password)]);
        $this->editpassword = false;
        session()->flash('success','Data Berhasil Diubah');
    }

    public function mount()
    {
        $user = Auth::user();
        $this->nohp = $user->no_hp;
        $this->email = $user->email;
        $this->userid = $user->id;
    }

    public function render()
    {
        return view('livewire.profile.pelanggan');
    }
}
