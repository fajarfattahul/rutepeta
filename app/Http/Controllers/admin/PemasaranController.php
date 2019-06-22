<?php

namespace App\Http\Controllers\admin;
use App\Pemasaran;
use App\User;
use App\Lokasi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PemasaranController extends Controller
{
    public function index(){
        $data['pemasaran'] = Pemasaran::with('user', 'lokasi')->get();

        return view('Pemasaran.index', $data);
        // return \response($data);
    }

    public function create(){
        $data['user'] = User::all();
        $data['lokasi'] = Lokasi::all();
        // return \response($data);
        
        return view('Pemasaran.create', $data);
    }

    public function store(Request $request){

        $pemasaran = new Pemasaran;

        $pemasaran->id_user = $request->id_user;
        $pemasaran->id_lokasi = $request->id_lokasi;
        $pemasaran->waktu_pemasaran = $request->waktu_pemasaran;
        $pemasaran->ket = 'proses';
        $pemasaran->save();
        
        return redirect(route('pemasaran_home'));
    }

    public function edit($id){
        $data['pemasaran'] = Pemasaran::find($id);
        $data['user'] = User::all();
        $data['lokasi'] = Lokasi::all();
        // return \response($data);
        return view('Pemasaran.edit', $data);

    }

    public function update(Request $request, $id){
        $pemasaran = Pemasaran::find($id);

        $pemasaran->id_user = $request->id_user;
        $pemasaran->id_lokasi = $request->id_lokasi;
        $pemasaran->waktu_pemasaran = $request->waktu_pemasaran;
        $pemasaran->ket = 'proses';
        $pemasaran->save();

        return redirect(route('pemasaran_home'));

    }

    public function delete($id){
        Pemasaran::where('id', $id)->delete();

        return redirect()->route('pemasaran_home');
    }
}