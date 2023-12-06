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
      background-color: #999999;  
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
    table {
      border-collapse: collapse;
      width: 100%;
      margin-top: 20px;
      margin-left: 50px;
      
    }

    th, td {
      border: 1px solid #0d0d0d;
      padding: 12px;
      text-align: left;
      width: 200px;
    }

    th {
      background-color: #0d0d0d;
      color: #fff;
      
    }
    td {
      background-color: #888888;
    }

    h1{
        text-align: center;
    }
    button{
      padding: 5px;
      margin-left:20px;
      width: 60px;
      border-radius:10px;
    }
    
    img{
      width: 30px;
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
      <h1>Data Pelanggan</h1>
      <table>
        <tr>
          <th>Nama </th>
          <th>Alamat</th>
          <th>No Telepon</th>
          <th>Opsi</th>
        </tr>
        <tr>@foreach ($pelanggan as $pelanggan)
          
          <td>{{$pelanggan->NamaPelanggan}}</td>
          <td>{{$pelanggan->Alamat}}</td>
          <td>{{$pelanggan->NomorTelepon}}</td>
          <td>
            <a href="/detail_pelanggan/{{$pelanggan->PelangganID}}"><button type="button" style="background-color:white;" ><img src="/img/detail.png"></button></a>

          </td>
          
        </tr>@endforeach
        


      </table>
      
    </div>
    </div>
</body>
</html>