<?php

namespace App\Http\Controllers\sales;
use App\User;
use App\Lokasi;
use App\Barang;
use App\Pemesanan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PemesananController extends Controller
{
    public function index(){
        $data['jabatan'] = Auth::user()->jabatan;
        $data['pemesanan'] = Pemesanan::with('user', 'lokasi', 'barang')->get();

        return view('Pemesanan.index', $data);
        // return \response($data);
    }

    public function create(){
        $data['jabatan'] = Auth::user()->jabatan;

        $data['lokasi'] = Lokasi::all();
        $data['barang'] = Barang::all();

        return view('Pemesanan.create', $data);
    }

    public function store(Request $request){

        $pemesanan = new Pemesanan;

        $pemesanan->id_barang = $request->id_barang;
        $pemesanan->jumlah_barang = $request->jumlah_barang;
        $pemesanan->id_lokasi = $request->id_lokasi;
        $pemesanan->latitude = $request->latitude;
        $pemesanan->longitude = $request->longitude;
        $pemesanan->ket = 'proses';
        $pemesanan->save();
        
        return redirect(route('pemesanan_home'));
    }
}
