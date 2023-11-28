<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegistrasiController extends Controller
{
    function registrasi(){
        return view('registrasi');
    }
    
    function proses_registrasi (request $request){

        
        $nama = $request-> nama;
        $un = $request-> username;
        $pw = $request-> password;
        $telp = $request-> telp;
        $level = $request-> level;

        DB::table('pegawai')->insert([
            
            'NamaPegawai' => $nama,
            'Username' => $un,
            'Password' => hash::make ($pw),
            'Telp' => $telp,
            'Level' => $level

        ]);

        return redirect('/admin');
    }
}
