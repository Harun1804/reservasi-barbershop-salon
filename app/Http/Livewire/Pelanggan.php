<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use App\Mail\Verification;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Auth\Events\Registered;

class Pelanggan extends Component
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
        $activation_token = hash_hmac('sha256',Str::random(40),config('app.key'));
        
        $rules = collect($this->validationRules)->collapse()->toArray();
        $this->validate($rules);

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'no_hp' => $this->phone,
            'password' => Hash::make($this->password),
            'token' => $activation_token
        ]);

        $data = [
            'name' => $this->name,
            'email' => $this->email,
            'token' => $activation_token
        ];

        Mail::to($user->email)->send(new Verification($data));

        $this->reset();
        $this->resetValidation();

        session()->flash('success','Pendaftaran Berhasil');
        return redirect()->route('konfirmasi');
    }

    public function render()
    {
        return view('livewire.pelanggan');
    }
}
