<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    body{
      display: flex;
      align-items: center;
      justify-content: center;
      background-color: #888888;
    }

    input{
      margin-top:10px;
      padding:10px;
      width:230px;
      border-radius:10px;
      margin-left:7%;
      border: 1px solid black;
    }

     h1{
      text-align:center;
      font-family:cursive;
    }
    .container{
      width:300px;
      height:400px;
      border:2px solid black;
      border-radius:5%;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background-color: #999999;
    }
    button{
      width:84.5%;
      padding:10px;
      border: 1px solid black;
      border-radius:10px;
      margin-top:10px;
      font-family:cursive;
      background-color: #999999;
      margin-left:7%;
      cursor:pointer;
    }
    button:hover{
      background-color: #888888;
    }

    select {
      width: 84.4%;
      margin-left: 7%;
      padding:10px;
      border: 1px solid black;
      margin-top: 10px;
      border-radius: 10px;
    }
  </style>
</head>
<body>
  <form action="registrasi" method="post">
    @method("POST")
    @csrf
  <div class="container">
    <h1>Registrasi</h1>
      <input type="text" placeholder="nama pegawai" name="nama" autocomplete="off" required><br>
      <input type="text" placeholder="username" name="username" autocomplete="off" required><br>
      <input type="password" placeholder="password" name="password" autocomplete="off" required><br>
      <input type="text" placeholder="no telepon" name="telp" autocomplete="off" required><br>
      <select name="level">
        <option value="pelayan">pelayan</option>
      </select>
      <button type="submit"><b>Registrasi</b></button>
  </div>
</form>
</body>
</html>