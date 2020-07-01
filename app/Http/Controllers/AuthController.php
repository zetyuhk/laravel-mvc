<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function form2(){
        return view('form2');
    }

    public function welcome2(Request $request){
        $first_name = $request["first_name"];
        $last_name = $request["last_name"];
        return view('welcome2', ["first_name" => $first_name, "last_name" => $last_name]);
    }
}
