<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    protected $table = 'laporan_pemasaran';   
    
    protected $fillable = [
        'id_pemasaran'
    ];

    public function pemasaran(){
        return $this->belongsTo(Pemasaran::class, 'id_pemasaran', 'id');
    }
}
