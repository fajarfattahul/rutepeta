<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'username', 'jabatan', 'jk'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // public function pemasaran(){
    //     return $this ->hasMany(Pemasaran::class);
    // }

    public function lokasi()
    {
        return $this->belongsToMany('App\Lokasi', 'pemasaran', 'id_user', 'id_lokasi')->withPivot('waktu_pemasaran', 'ket');
    }

    public function barang()
    {
        return $this->belongsToMany('App\Barang', 'pemesanan', 'id_user', 'id_barang')->withPivot('ket', 'jumlah_barang');
    }
}
