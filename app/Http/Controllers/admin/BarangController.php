<?php

namespace App\Http\Controllers\admin;
use App\Barang;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class BarangController extends Controller
{
    public function index(){
        $data['jabatan'] = Auth::user()->jabatan;
        $data['barang'] = Barang::all();
        
        // return \response($data);
        return view('Barang.index', $data);
    }

    public function create(){
        $data['jabatan'] = Auth::user()->jabatan;
        return view('Barang.create', $data);
    }

    public function store(Request $request){
        $lokasi = new Barang;
        $lokasi->nama_barang = $request->nama_barang;
        $lokasi->kd_barang = $request->kd_barang;
        $lokasi->save();

        return redirect(route('barang_home'));
    }

    public function edit($id){

        $data['jabatan'] = Auth::user()->jabatan;
        $data['barang'] = Barang::find($id);
        return view('Barang.edit', $data);

    }

    public function update($id, Request $request){
        $barang = Barang::find($id);
        
        $barang->nama_barang = $request->nama_barang;
        $barang->kd_barang = $request->kd_barang;
        $barang->save();

        return redirect(route('barang_home'));

    }

    public function delete($id)
    {
        Lokasi::where('id', $id)->delete();

        return redirect()->route('barang_home');
    }
}
