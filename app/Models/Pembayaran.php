<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    protected $table = 'pembayaran';

    protected $fillable = ['reservasi_id', 'metode', 'jumlah', 'tanggal_bayar'];

    // One-to-one (sisi kebalikan): pembayaran milik satu reservasi
    public function reservasi()
    {
        return $this->belongsTo(Reservasi::class, 'reservasi_id');
    }
}
