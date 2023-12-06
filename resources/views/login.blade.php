<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTZEZG3WF11zoLSAGy_0Meb-fnas6JZzarw7w&usqp=CAU">
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
      height:265px;
      border:2px solid black;
      border-radius:5%;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background-color: #999999;
      box-shadow: 0 5px 10px 5px rgba(0,0,0,0.2);

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
      background-color:#888888;
    }
    .error{
      position: absolute;
      top:20%;
      left: 50%;
      transform: translate(-50%, -50%);
      background-color: #ff0000; 
      width: 280px; 
      color: #ffff;
      border-radius: 5px;
      border:2px solid black;
      padding: 10px;
      text-align: center;
      font-size: 15px;
      box-shadow: 0 5px 10px 5px rgba(0,0,0,0.2);
    }
  </style>
</head>
<body>
    @if (session("error"))
      <div class="error">{{session("error")}}</div>
    @endif

  <form action="/login" method="post">
    @method("POST")
    @csrf
  <div class="container">
    <h1>Login</h1>
      <input type="text" placeholder="username" name="username" autocomplete="off" required><br>
      <input type="password" placeholder="password" name="password" autocomplete="off" required><br>
      <button type="submit"><b>Login</b></button>
  </div>
</form>
</body>
</html>