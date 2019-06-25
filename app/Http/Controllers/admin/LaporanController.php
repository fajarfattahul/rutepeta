<?php

namespace App\Http\Controllers\admin;
use App\Pemasaran;
use App\User;
use App\Lokasi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LaporanController extends Controller
{
    public function index(){
        $data['pemasaran'] = Pemasaran::with('user', 'lokasi')->get();

        return view('Laporan.index', $data);
        // return \response($data);
    }

    public function edit($id){
        $data['pemasaran'] = Pemasaran::find($id);
        $data['user'] = User::all();
        $data['lokasi'] = Lokasi::all();
        // return \response($data);
        return view('Laporan.edit', $data);

    }

    public function update(Request $request, $id){
        $pemasaran = Pemasaran::find($id);

        $pemasaran->id_user = $request->id_user;
        $pemasaran->id_lokasi = $request->id_lokasi;
        $pemasaran->waktu_pemasaran = $request->waktu_pemasaran;
        $pemasaran->ket = $request->ket;
        $pemasaran->save();

        return redirect(route('laporan_home'));

    }

    public function delete($id){
        Pemasaran::where('id', $id)->delete();

        return redirect()->route('laporan_home');
    }
}
