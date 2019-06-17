<?php

namespace App\Http\Controllers\sales;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class salesController extends Controller
{
    public function index(){
        return view('sales.index');
    }
}
