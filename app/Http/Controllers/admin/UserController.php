<?php

namespace App\Http\Controllers\admin;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index(){
        $data['users'] = User::all();

        return view('User.index', $data);
    }

    public function create(){
        return view('User.create');
    }

    public function store(Request $request){
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->jabatan = $request->jabatan;
        $user->jk = $request->jk;
        $user->save();

        return redirect(route('user_home'));
    }

    public function edit($id){

        $data['users'] = User::find($id);
        return view('User.edit', $data);

    }

    public function update($id, Request $request){
        $us = User::find($id);
        
        $us->name = $request->name;
        $us->email = $request->email;
        $us->password = $request->password;
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
