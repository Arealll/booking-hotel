<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipeKamar extends Model
{
    protected $table = 'tipe_kamar';

    protected $fillable = ['nama_tipe', 'harga_per_malam', 'kapasitas'];

    // One-to-many: satu tipe punya banyak kamar
    public function kamar()
    {
        return $this->hasMany(Kamar::class, 'tipe_kamar_id');
    }

    // Many-to-many: tipe kamar <-> fasilitas (pivot: fasilitas_tipe_kamar)
    public function fasilitas()
    {
        return $this->belongsToMany(Fasilitas::class, 'fasilitas_tipe_kamar', 'tipe_kamar_id', 'fasilitas_id');
    }
}
