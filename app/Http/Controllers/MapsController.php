<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapsController extends Controller
{
    public function index()
    {
        return view('peta.maps');
    }

    public function partial(){
        return view('partials.master');
    }
}
