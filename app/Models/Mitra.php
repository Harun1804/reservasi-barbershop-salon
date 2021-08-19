<?php

namespace App\Models;

use App\Models\User;
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
}
