<?php

namespace App\Http\Controllers\admin;
use App\Lokasi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LokasiController extends Controller
{
    public function index(){
        $data['jabatan'] = Auth::user()->jabatan;
        $data['lokasi'] = Lokasi::all();

        return view('Lokasi.index', $data);
    }

    public function create(){
        $data['jabatan'] = Auth::user()->jabatan;
        return view('Lokasi.create');
    }

    public function store(Request $request){
        $lokasi = new Lokasi;
        $lokasi->nama_lokasi = $request->nama_lokasi;
        $lokasi->wilayah = $request->wilayah;
        $lokasi->latitude = $request->latitude;
        $lokasi->longitude = $request->longitude;
        $lokasi->save();

        return redirect(route('lokasi_home'));
    }

    public function edit($id){

        $data['jabatan'] = Auth::user()->jabatan;
        $data['lokasi'] = Lokasi::find($id);
        return view('Lokasi.edit', $data);

    }

    public function update($id, Request $request){
        $lokasi = Lokasi::find($id);
        
        $lokasi->nama_lokasi = $request->nama_lokasi;
        $lokasi->wilayah = $request->wilayah;
        $lokasi->latitude = $request->latitude;
        $lokasi->longitude = $request->longitude;
        $lokasi->save();

        return redirect(route('lokasi_home'));

    }

    public function delete($id)
    {
        Lokasi::where('id', $id)->delete();

        return redirect()->route('lokasi_home');
    }
}