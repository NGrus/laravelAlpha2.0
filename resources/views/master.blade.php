<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    @yield('title')
  </title>
  @yield('style')
  <style>
    body{
      height:100%;
      color:red;
      background-color:black;
    }
    a{
      color:red;
    }
    .backtomsgs{
      font-size:20px;
      margin:50px;
    }
    .deetscont{
      text-align:center;
    }
    .footer{
      width:100%;
      background-color:brown;
      text-align: center;
      margin-top:400px;
      color:black;
      font-size:20;
    }
  </style>
</head>
<body>
  <h1>
    @yield('h1')
  </h1>

  @yield('content')

  <div class="footer">
    <b>Dummy Footer</b>
  </div>
</body>
</html>