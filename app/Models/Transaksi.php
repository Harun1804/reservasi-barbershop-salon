<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = 'transaksi';
    protected $with = 'user';
    protected $fillable = [
        'user_id',
        'tanggal_pesan',
        'jam_pesan',
        'total_harga_pemesanan',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
