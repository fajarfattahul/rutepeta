<?php

namespace App\Http\Controllers\admin;
use App\Pemasaran;
use App\User;
use App\Lokasi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LaparController extends Controller
{
    public function index(){
        $data['pemasaran'] = Pemasaran::with('user', 'lokasi')->get();

        return view('Lapar.index', $data);
        // return \response($data);
    }
}
