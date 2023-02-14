<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootsrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    <link rel="shortcut icon" type="image/x-icon" href="/img/Learn2Play_Logo_1.png">
    
    <title>Learn2Play | {{ $title }}</title>

    <style>
      body {
        background: url('https://pbs.twimg.com/media/Fkbq6lXXwAAHex6?format=jpg&name=large') no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        background-size: cover;
        -o-background-size: cover;
      }

      .button {
        background-color: #6f42c1; 
        color: #f8f9fa;
        padding: 7px;
        padding-left: 10px;
        padding-right: 10px;
        border-radius: 7px;
        white-space: nowrap;
      }
      
      .button:hover {
        background-color: indigo;
        color: #f8f9fa;
      }
    </style>

  </head>
  <body>
    <div class="shadow-lg">
      @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>