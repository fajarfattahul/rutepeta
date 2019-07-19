<?php

namespace App\Http\Controllers\sales;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PemesananController extends Controller
{
    public function index(){
        $data['jabatan'] = Auth::user()->jabatan;

        return view('Pemesanan.index', $data);
        // return \response($data);
    }
}
