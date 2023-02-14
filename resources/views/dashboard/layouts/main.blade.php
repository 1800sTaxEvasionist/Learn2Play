<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Learn2Play | {{ $title }}</title>
    
    <!-- Custom styles for this template -->
    <link href="/css/dashboard.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    {{-- Trix Editor --}}
    <link rel="stylesheet" type="text/css" href="/css/trix.css">
    <script type="text/javascript" src="/js/trix.js"></script>

    <link rel="stylesheet" type="text/css" href="/css/pagination.css">

    <link rel="shortcut icon" type="image/x-icon" href="/img/Learn2Play_Logo_1.png">

    <style>
      trix-toolbar [data-trix-button-group='file-tools'] {
        display: none;
      }
      
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
      
      .button-delete {
        background-color: #dc3545; 
        color: #f8f9fa;
        padding: 6px;
        padding-left: 10px;
        padding-right: 10px;
        border-radius: 7px;
        white-space: nowrap;
      }
      
      .button-delete:hover {
        background-color: #a30000;
        color: #f8f9fa;
      }
      
      .badge {
        background-color: #6f42c1;
        color: #f8f9fa;
      }

      .dropdown-menu { 
        background-color: rgba(20, 20, 20, 0.8);
      }

      .dropdown-item {
        color: #f8f9fa;
      }

      .dropdown-item:hover {
        background-color: #6f42c1;
        color: #f8f9fa;
      }
    </style>
    
  </head>
  <body>
    @include('dashboard.layouts.navbar', ['categories' => $categories = App\Models\Category::orderBy('id', 'desc')->take(5)->get()])
    <div class="container-fluid">
      <div class="row">
        <main class="mx-sm-auto col-lg-10 px-md-4 mt-5">
          <div class="card shadow-lg rounded-0" style="background-color: rgba(0, 0, 0, 0.75)">
            <div class="px-5">
              @yield('home')
              @yield('content')
            </div>
          </div>
        </main>
      </div>
    </div>
    <div class="bg-dark pt-4">
      @include('dashboard.layouts.footer')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    <script src="/js/dashboard.js"></script>
  </body>
</html>
