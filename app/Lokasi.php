<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lokasi extends Model
{
    protected $table = 'lokasi';

    protected $fillable = [
        'nama_lokasi', 'wilayah'
    ];

    // public function pemasaran(){
    //     return $this->hasMany(Pemasaran::class);
    // }

    public function user()
    {
        return $this->belongsToMany('App\User', 'pemasaran', 'id_lokasi', 'id_user');
    }

    public function pemesanan()
    {
        return $this->hasMany(Pemesanan::class);
    }
}
