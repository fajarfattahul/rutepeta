<?php

namespace App\Http\Controllers\admin;
use App\Pemasaran;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PemasaranController extends Controller
{
    public function index(){
        $data['pemasaran'] = Pemasaran::all();
        
        return view('Pemasaran.index', $data);
    }

    public function create(){
        $data['user'] = User::all();
        return view('Pemasaran.create', $data);
    }

    public function store(Request $request){
        $pemasaran = new Pemasaran;
        
        $pemasaran->id_user = $request->id_user;
        $pemasaran->id_lokasi = $request->id_lokasi;
        $pemasaran->waktu_pemasaran = $request->waktu_pemasaran;
        $pemasaran->save();

        return redirect(route('pemasaran_home'));
    }

    public function edit($id){
        $data['pemasaran'] = Pemasaran::find($id);
        $data['user'] = Pemasaran::all();

        return view('Pemasaran.edit', $data);

    }

    public function update($id, Request $request){
        $pemasaran = Pemasaran::find($id);

        $pemasaran->id_user = $request->id_user;
        $pemasaran->id_lokasi = $request->id_lokasi;
        $pemasaran->waktu_pemasaran = $request->waktu_pemasaran;
        $pemasaran->save();

        return redirect(route('lokasi_home'));

    }

    public function delete($id){
        Pemasaran::where('id', $id)->delete();

        return redirect()->route('pemasaran_home');
    }
}