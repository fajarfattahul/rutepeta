<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemasaran_lap extends Model
{
    protected $table = 'pemasaran_lap';

    protected $fillable = [
        'id_pemasaran', 'keterangan'
    ];

    public function pemasaran(){
        return $this->belongsTo(Pemasaran::class, 'id_pemasaran', 'id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'id_user', 'id');
    }

    public function lokasi(){
        return $this->belongsTo(Lokasi::class, 'id_lokasi', 'id');
    }
}
