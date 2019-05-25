<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemasaran extends Model
{
    protected $table = 'pemasaran';   
    
    protected $fillable = ['id_user'];

    public function user(){
        return $this->belongsTo('App\User');
    }
}