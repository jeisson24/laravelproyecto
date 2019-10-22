<!DOCTYPE html>
<html lang="es">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <!-- Styles Laravel Mix -->
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
  </head>
  <body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
    
    @include('layouts.navbar')
    @include('layouts.sidebar')

    @yield('contenido')
    
      






      
    </div>
    <footer class="app-footer">
      <div>
        <a href="https://github.com/AndresCortesORG/" class="link">Github</a>
        <span>&copy; 2019 AndresCortesORG.</span>
      </div>
      <div class="ml-auto">
        <span>Desarrollado en </span>
        <a href="https://coreui.io" class="link" target="_blank">CoreUI</a> y <a target="_blank" class="link" href="https://laravel.com/">Laravel 6</a>
      </div>
    </footer>
    <!-- scripts Laravel Mix -->
      <script src="{{ url('js/app.js') }}"></script>
  </body>
</html>