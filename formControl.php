<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\form;

class formControl extends Controller
{
    public function register(){
        return view('form'); 
    }
    public function data(Request $request){
        print_r($request->all());
        $request->validate([
            'name' => 'required',
            'email' => 'required | email',
            'password' => 'required',
        ]);
        $user = new form();
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->password = $request['password'];
        $user->save();
    }

    public function std_view(){
        $stdData = form::all()
    }
}
