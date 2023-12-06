<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\models\produk;




class KasirController extends Controller
{
    

    function produk(){
        
        $produk = DB::table('produk')->get();
        return view('produk',['produk' =>$produk]);
    }

    function home(){
        return view('home');
    }

    function pelanggan (){

        $pelanggan = DB::table('pelanggan')->get();
        return view('pelanggan',['pelanggan'=> $pelanggan]);
    }

    function tambahproduk(){
        return view('tambahproduk');
    }
    function prosestambah (Request $request){

        $barang = $request-> barang;
        $harga = $request-> harga;
        $stok = $request-> stok;

        DB::table('produk')->insert([

            'NamaProduk' => $barang,
            'Harga' => $harga,
            'Stok' => $stok
        ]);
        return redirect("/produk");
    }

    function hapus ($id){
        DB::table('produk')->where('ProdukID', '=', $id)->delete();

        return redirect("/produk");

    }
    function update ($id){
        $produk = DB::table('produk')->where('ProdukID','=',$id)->first();
        return view('/update',['produk' => $produk]);
    }
    

    function proses_update(request $request , $id){

       
        $barang = $request->barang;
        $harga = $request->harga;
        $stok = $request->stok;
        

        DB::table('produk')->where('ProdukID','=',$id)->update([
            
            'NamaProduk' => $barang,
            'Harga' => $harga,
            'stok' => $stok,
         
        ]);
        
        return redirect('/produk');
    }
    
    function penjualan (){
        $penjualan = DB::table('penjualan')->get();
        return view('penjualan',['penjualan'=>$penjualan]);
    }

    function detail($id){
        
        $produk = DB::table('produk')->where('ProdukID',$id)->get();
        return view('detail',['produk' =>$produk]);
    }

    function tambah_pelanggan (){
        return view('tambahpelanggan');
    }

    function proses_tambah_pelanggan (Request $request){

            $nama = $request-> nama;
            $alamat = $request-> alamat;
            $telp = $request-> telp;
    
            DB::table('pelanggan')->insert([
    
                'NamaPelanggan' => $nama,
                'Alamat' => $alamat,
                'NomorTelepon' => $telp
            ]);
            return redirect("/pelanggan");
        }

        function detailpelanggan ($id){
            $pelanggan = DB::table('pelanggan')->where('PelangganID',$id)->get();
            return view('detailpelanggan',['pelanggan'=>$pelanggan]);
        }

        function updatepelanggan ($id){
            $pelanggan = DB::table('pelanggan')->where('PelangganID','=',$id)->first();
            return view('updatepelanggan',['pelanggan' => $pelanggan]);
        }

        function proses_update_pelanggan(request $request , $id){

       
            $nama = $request->nama;
            $alamat = $request->alamat;
            $telp = $request->telp;
            
    
            DB::table('pelanggan')->where('PelangganID','=',$id)->update([
                
                'NamaPelanggan' => $nama,
                'Alamat' => $alamat,
                'NomorTelepon' => $telp,
             
            ]);
            
            return redirect('/pelanggan');
        }

        function hapuspelanggan($id){
            DB::table('pelanggan')->where('PelangganID', '=', $id)->delete();

            return redirect("/pelanggan");
        }
    }



