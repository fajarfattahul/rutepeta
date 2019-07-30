<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemasaran extends Model
{
    protected $table = 'pemasaran';  
    
    protected $fillable = [
        'id_user', 'id_lokasi', 'waktu_pemasaran', 'ket'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'id_user','id');
    }
    
    public function lokasi(){
        return $this->belongsTo(Lokasi::class, 'id_lokasi', 'id');
    }

}