<?php

namespace App\Models;

use App\Models\User;
use App\Models\Katalog;
use App\Models\Provinsi;
use App\Models\Kabupaten;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mitra extends Model
{
    use HasFactory;

    protected $table = 'mitra';
    protected $fillable = [
        'nama_mitra',
        'alamat',
        'deskripsi',
        'jenis_mitra',
        'thumbnail',
        'user_id',
        'provinsi_id',
        'kabupaten_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getThumbnailAttribute($value)
    {
        return url('storage/'.$value);
    }

    public function katalog()
    {
        return $this->hasMany(Katalog::class);
    }

    public function provinsi()
    {
        return $this->belongsTo(Provinsi::class);
    }

    public function kabupaten()
    {
        return $this->belongsTo(Kabupaten::class);
    }
}
