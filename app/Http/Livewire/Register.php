<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Register extends Component
{
    public $email,$password,$confirmPassword,$name,$phone;

    public $currentPage = 1;

    public $pages = [
        1 => [
            'heading' => 'Akun'
        ],
        2 => [
            'heading' => 'Biodata'
        ],
    ];

    private $validationRules = [
        1 => [
            'email' => ['required','email:dns','unique:users,email'],
            'password' => ['required','min:6'],
            'confirmPassword' => ['required','min:6','same:password']
        ],
        2 => [
            'name' => ['required','string'],
            'phone' => ['required','numeric']
        ]
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName,$this->validationRules[$this->currentPage]);
    }

    public function goToNextPage()
    {
        $this->validate($this->validationRules[$this->currentPage]);
        $this->currentPage++;
    }

    public function goToPreviousPage()
    {
        $this->currentPage--;
    }

    public function submit()
    {
        $rules = collect($this->validationRules)->collapse()->toArray();
        $this->validate($rules);

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'no_hp' => $this->phone,
            'password' => Hash::make($this->password),
        ]);

        $this->reset();
        $this->resetValidation();

        session()->flash('success','Pendaftaran Berhasil');
        return redirect()->route('konfirmasi');
    }

    public function render()
    {
        return view('livewire.register');
    }
}
