<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

      <!-- Scripts -->
      <script src="{{ asset('js/app.js') }}" defer></script>

      <!-- Styles -->
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
      <title>bootstrap-sass</title>
  </head>
  <body>

    @include('incs.navbar')
    <div class="container justify-content-center">
       
    @yield('content')
    </div>
