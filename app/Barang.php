<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barang';

    protected $fillable = [
        'nama_barang', 'kd_barang', 'harga'
    ];

    // public function pemesanan(){
    //     return $this->hasMany(Pemesanan::class);
    // }

}
