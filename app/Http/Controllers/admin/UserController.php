<?php

namespace App\Http\Controllers\admin;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){
        $data['jabatan'] = Auth::user()->jabatan;
        $data['users'] = User::all();

        return view('User.index', $data);
    }

    public function create(){
        $data['jabatan'] = Auth::user()->jabatan;
        // return \response($data);        
        return view('User.create', $data);
    }

    public function store(Request $request){
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request['password']);
        $user->jabatan = $request->jabatan;
        $user->jk = $request->jk;
        $user->save();

        return redirect(route('user_home'));
    }

    public function edit($id){
        $data['jabatan'] = Auth::user()->jabatan;
        $data['users'] = User::find($id);
        return view('User.edit', $data);

    }

    public function update($id, Request $request){
        $us = User::find($id);
        
        $us->name = $request->name;
        $us->email = $request->email;
        $us->password = Hash::make($request['password']);
        $us->jabatan = $request->jabatan;
        $us->jk = $request->jk;
        $us->save();

        return redirect(route('user_home'));

    }

    public function delete($id)
    {
        User::where('id', $id)->delete();

        return redirect()->route('user_home');
    }
}
