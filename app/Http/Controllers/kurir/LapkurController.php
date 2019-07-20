<?php

namespace App\Http\Controllers\kurir;
use App\Pemasaran;
use App\Pemesanan;
use App\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class LapkurController extends Controller
{
    public function index(){
        $data['jabatan'] = Auth::user()->jabatan;
        $data['lapkur'] = Pemesanan::with('pemasaran', 'barang', 'user', 'lokasi')->get();

        return view('Lapkur.index', $data);
    }
}
