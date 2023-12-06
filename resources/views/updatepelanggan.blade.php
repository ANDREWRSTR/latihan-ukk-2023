<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Website Kasir</title>
  <style>
    body {
      font-family: cursive;                   
      margin: 0;                                       
      padding: 0;                                 
      background-color:#999999;  
      display: flex;                                   
      flex-direction: column;                           
      align-items: flex-start;                          
    }

    header {
      background-color: #0d0d0d;
      height: 79px;
      text-align: center;
      width: 1360px;
      display: flex;
      align-items: center;
      justify-content: flex-start;
    }

    .logout {
      margin-top: auto;
      text-decoration: none;
      text-align: center;
      display: block;
      cursor: pointer;
      transition: 0.3s;
    }

    .container {
      display: flex;
      
    }

    .menu {
      display: flex;
      flex-direction: column;
      align-items: flex-start;
      padding: 16px;
      background-color: #888888;
      width: 160px;
      height: 82vh;
      border: none;
      border-right: 1px solid black;
    }

    .menu a {
      text-decoration: none;
      font-size: 19px;
      margin-bottom: 20px;
      transition: 0.3s;
      color: black;
    }

    .menu a:hover {
      color: #fff;
    }

    .isi {
      width: 1000px;
      padding: 20px;
    }

    h2{
        color: #fff;
        
        margin-left: 20px;
    }
    h1{
      text-align: center;
    }
    input[type="text"]{
        margin-bottom:10px;
        margin-left:11px;
        width:660px;
        padding:10px;
        border-radius:10px;
        border: 1px solid black;
    }
    .kotak{
        width:700px;
        border:1px solid black;
        padding:20px;
        margin-left:180px;
        border-radius:5px;
        background-color:#888888;
        margin-top:20px;
    }
    button{
        padding:10px;
        width:80px;
        border-radius:7px;
        margin-top: 10px;
        margin-top: 10px;
        margin-left: 11px;
        border: 1px solid black;
    }
    label{
      margin-left: 11px;
    }

    
  </style>
</head>
<body>

  <header>
    <h2>Kasir</h2>
  </header>

  <div class="container">
    <div class="menu" >
      <a href="{{ url('home') }}">Home</a>
      <a href="{{ url('produk') }}">Produk</a>
      <a href="{{ url('tambahproduk') }}">tambah produk</a>
      <a href="{{ url('penjualan') }}">Penjualan</a>
      <a href="{{ url('pelanggan') }}">pelanggan</a>
      <a href="{{ url('tambahpelanggan') }}">tambah pelanggan</a>

      <a href="{{ url('/logout')}}" class="logout">Logout</a>
    </div>
    <div class="isi">
        <div class="kotak">
            <form action={{url ("/update_pelanggan/$pelanggan->PelangganID")}} method="post">
              @method('POST')
              @csrf
              <h1>Update Pelanggan</h1>
              <label>Nama Pelanggan</label><br>
              <input type="text" name="nama" value="{{$pelanggan->NamaPelanggan}}"><br>
              <label>Alamat</label><br>
              <input type="text" name="alamat" value="{{$pelanggan->Alamat}}"><br>
              <label>No Telepon</label> <br>
              <input type="text" name="telp" value="{{$pelanggan->NomorTelepon}}"><br>
              <button type="submit">SIMPAN</button>
          </form>
          </div>

    </div>
    </div>
</body>
</html>