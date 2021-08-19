<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Mitra as Mmitra;
use Livewire\Component;
use App\Mail\Verification;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Livewire\WithFileUploads;

class Mitra extends Component
{
    use WithFileUploads;

    public $email,$password,$confirmPassword,$name,$phone;
    public $namaMitra,$alamat,$deskripsi,$jenisMitra,$thumbnail;

    public $currentPage = 1;

    public $pages = [
        1 => [
            'heading' => 'Akun'
        ],
        2 => [
            'heading' => 'Biodata'
        ],
        3 => [
            'heading' => 'Info Toko'
        ]
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
        ],
        3 => [
            'namaMitra' => ['required','string'],
            'alamat' => ['required','string'],
            'deskripsi' => ['nullable'],
            'jenisMitra' => ['required','in:salon,barbershop'],
            'thumbnail' => ['required','image','mimes:jpg,png,jpeg,bmp','max:2048']
        ],
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
            'token' => $activation_token,
            'role' => 'mitra'
        ]);

        $this->thumbnail->store('assets/profile/toko');

        Mmitra::create([
            'nama_mitra' => $this->namaMitra,
            'alamat' => $this->alamat,
            'deskripsi' => $this->deskripsi,
            'jenis_mitra' => $this->jenisMitra,
            'thumbnail' => $this->thumbnail,
            'user_id' => $user->id,
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
        return view('livewire.mitra');
    }
}
