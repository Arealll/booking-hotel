<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    protected $table = 'kamar';

    protected $fillable = ['tipe_kamar_id', 'nomor_kamar', 'status'];

    // Many-to-one: kamar milik satu tipe
    public function tipeKamar()
    {
        return $this->belongsTo(TipeKamar::class, 'tipe_kamar_id');
    }

    // Many-to-many: kamar <-> reservasi (pivot: kamar_reservasi)
    public function reservasi()
    {
        return $this->belongsToMany(Reservasi::class, 'kamar_reservasi', 'kamar_id', 'reservasi_id');
    }
}
