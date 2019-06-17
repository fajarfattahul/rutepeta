<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Pemasaran_lap;
use App\Pemasaran;
use App\User;
use App\Lokasi;

class Pemasaran_lapController extends Controller
{
    public function index(){
        $data['pemasaran_lap'] = Pemasaran_lap::with('pemasaran.user', 'pemasaran.lokasi')->get();
        // $data['pemasaran'] = Pemasaran::with('user','lokasi')->get();

        // return \response($data);
        return view('Pemasaran_lap.index', $data);
    }

}
