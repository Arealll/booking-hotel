<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tamu extends Model
{
    protected $table = 'tamu';

    protected $fillable = ['nama', 'email', 'no_hp', 'alamat'];

    // One-to-many: satu tamu punya banyak reservasi
    public function reservasi()
    {
        return $this->hasMany(Reservasi::class, 'tamu_id');
    }
}
