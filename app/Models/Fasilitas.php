<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    protected $table = 'fasilitas';

    protected $fillable = ['nama_fasilitas'];

    // Many-to-many: fasilitas <-> tipe kamar (pivot: fasilitas_tipe_kamar)
    public function tipeKamar()
    {
        return $this->belongsToMany(TipeKamar::class, 'fasilitas_tipe_kamar', 'fasilitas_id', 'tipe_kamar_id');
    }
}
