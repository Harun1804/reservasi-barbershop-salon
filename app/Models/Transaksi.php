<?php

namespace App\Models;

use App\Models\User;
use Carbon\Carbon;
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

    public function detailTransaksi()
    {
        return $this->hasMany(DetailTransaksi::class);
    }

    public function pesanan()
    {
        foreach ($this->detailTransaksi as $dt) {
            return $dt;
        }
    }

    public function waktu()
    {
        return Carbon::parse($this->tanggal_pesan)->format('l, d F Y') . ' - ' . Carbon::parse($this->jam_pesan)->format('H.i');
    }
}
