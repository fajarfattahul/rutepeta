<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use Notifiable;

    protected $table = 'admin';

    protected $fillable = [
        'name', 'email', 'password'
    ];

    protected $hidden = [
        'password', 'remember_token'
    ];
}
