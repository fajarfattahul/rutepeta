<?php

namespace App\Http\Controllers\admin;
use App\Pemasaran;
use App\User;
use App\Lokasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class LaparController extends Controller
{
    public function index(){
        $data['jabatan'] = Auth::user()->jabatan;
        $data['pemasaran'] = Pemasaran::with('user', 'lokasi')->get();

        return view('Lapar.index', $data);
        // return \response($data);
    }
}
