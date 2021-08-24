<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Profile extends Component
{
    public $nohp,$email,$password;
    public $editMode = false;
    

    public function render()
    {
        return view('livewire.profile');
    }
}
