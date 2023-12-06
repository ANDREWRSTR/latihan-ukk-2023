<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;



class LoginController extends Controller
{
    function login(){
        return view('login');
    }

    function proses_login(Request $request){
        $data_login = $request->only("username","password");
        if(auth::attempt($data_login)){
            return redirect("produk");
        }else{
            return redirect("login")->with("error","username atau password salah");
        }
    }

    function logout(){
        Auth::logout();

        return redirect("login");
    }
}
