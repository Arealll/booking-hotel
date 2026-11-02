<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
    protected $table = 'reservasi';

    protected $fillable = ['tamu_id', 'tanggal_checkin', 'tanggal_checkout', 'total_harga', 'status'];

    // Many-to-one: reservasi milik satu tamu
    public function tamu()
    {
        return $this->belongsTo(Tamu::class, 'tamu_id');
    }

    // One-to-one: satu reservasi punya satu pembayaran
    public function pembayaran()
    {
        return $this->hasOne(Pembayaran::class, 'reservasi_id');
    }

    // Many-to-many: reservasi <-> kamar (pivot: kamar_reservasi)
    public function kamar()
    {
        return $this->belongsToMany(Kamar::class, 'kamar_reservasi', 'reservasi_id', 'kamar_id');
    }
}
