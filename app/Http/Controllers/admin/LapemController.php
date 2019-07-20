<?php

namespace App\Http\Controllers\admin;
use App\Pemasaran;
use App\Pemesanan;
use App\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class LapemController extends Controller
{
    public function index(){
        $data['jabatan'] = Auth::user()->jabatan;
        $data['pemesanan'] = Pemesanan::with('pemasaran', 'barang', 'user', 'lokasi')->get();

        return view('Lapem.index', $data);
    }
}
