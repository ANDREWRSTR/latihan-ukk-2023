<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;




class LoginController extends Controller
{
    function login(){
        return view('login');
    }
    function proses_login(Request $request){
        $data_login = $request->only("Username","Password");
        if(auth::guard("pegawai")->attempt($data_login)){
            return redirect("home");
        }else{
            return redirect("login")->with("error","username atau password salah");
        }
    }
    function logout(){
        Auth::logout();

        return redirect("login");
    }
}
