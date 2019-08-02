<?php

namespace App\Http\Controllers\sales;

use App\Pemasaran;
use App\User;
use App\Lokasi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LaporanController extends Controller
{
    public function index()
    {
        $data['laporan'] = Pemasaran::where('id_user', Auth::user()->id)->get();
        $data['user'] = User::where('id', Auth::user()->id)->get();
        $data['jabatan'] = Auth::user()->jabatan;
        $data['lokasi'] = User::findOrfail(Auth::user()->id)->lokasi()->orderBy('nama_lokasi')->get();
        return view('Laporan.index', $data);
    }

    public function edit($id)
    {
        $data['jabatan'] = Auth::user()->jabatan;
        $data['pemasaran'] = Pemasaran::find($id);
        $data['user'] = User::where('jabatan', '=', 'sales')->get();
        $data['lokasi'] = Lokasi::all();
        // return \response($data);
        return view('Laporan.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $pemasaran = Pemasaran::find($id);

        $pemasaran->id_user = $request->id_user;
        $pemasaran->id_lokasi = $request->id_lokasi;
        $pemasaran->waktu_pemasaran = $request->waktu_pemasaran;
        $pemasaran->ket = $request->ket;
        $pemasaran->save();

        return redirect(route('laporan_home'));
    }

    public function delete($id)
    {
        Pemasaran::where('id', $id)->delete();

        return redirect()->route('laporan_home');
    }
}
