<?php

namespace App\Models;

use App\Models\Katalog;
use App\Models\Transaksi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DetailTransaksi extends Model
{
    use HasFactory;

    protected $table = 'detail_transaksi';
    protected $with = ['transaksi','katalog'];
    protected $fillable = [
        'transaksi_id',
        'katalog_id',
        'jumlah',
        'total',
    ];

    public function transaksi()
    {
        return $this->belongsTo(Transaksi::class);
    }

    public function katalog()
    {
        return $this->belongsTo(Katalog::class);
    }
}
