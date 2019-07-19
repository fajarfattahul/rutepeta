<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    protected $table = 'pemesanan';

    protected $fillable = [
        'id_pemasaran', 'id_barang', 'jumlah_barang', 'ket'
    ];

    public function pemasaran(){
        return $this->belongsTo(Pemasaran::class, 'id_pemasaran', 'id');
    }

    public function barang(){
        return $this->belongsTo(Barang::class, 'id_barang', 'id');
    }
}
