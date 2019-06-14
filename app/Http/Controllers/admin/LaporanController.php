<?php

namespace App\Http\Controllers\Admin;
use App\Laporan;
use App\Pemasaran;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LaporanController extends Controller
{
    public function index(){
        $data['laporan'] = Laporan::with('pemasaran')->get();
        return view('Laporan.index', $data);
    }

    public function create(){
        return view('Laporan.create');
    }

    public function store(Request $request){
        $laporan = new Laporan;

        $laporan->id_pemasaran = $request->id_pemasaran;
        $laporan->keterangan = $request->keterangan;
        $laporan->save();

        return redirect(route('laporan_home'));
    }

    public function edit($id){

        $data['laporan'] = Laporan::find($id);
        return view('Laporan.edit', $data);

    }

    public function update($id, Request $request){
        $laporan = Laporan::find($id);
        
        $laporan->id_pemasaran = $request->id_pemasaran;
        $laporan->keterangan = $request->keterangan;
        $laporan->save();

        return redirect(route('laporan_home'));

    }

    public function delete($id)
    {
        Laporan::where('id', $id)->delete();
        return redirect()->route('laporan_home');
    }
}
