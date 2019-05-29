<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemasaran extends Model
{
    protected $table = 'pemasaran';  
    
    protected $fillable = [
        'id_user', 'id_lokasi', 'waktu_pemasaran'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}