<?php

namespace App\Models;

use App\Models\Mitra;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Katalog extends Model
{
    use HasFactory;

    protected $table = 'katalog';
    protected $with = 'mitra';
    protected $fillable = [
        'mitra_id',
        'nama_model',
        'harga'
    ];

    public function mitra()
    {
        return $this->belongsTo(Mitra::class);
    }
}
