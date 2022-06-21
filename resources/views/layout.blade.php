<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title', 'Blog Stefan')</title>
   <!-- Scripts Bootstrap -->
   <script src="{{ asset('js/app.js') }}" defer></script>
   <!-- Styles Bootstrap -->
   <link href="{{ asset('css/app.css') }}" rel="stylesheet"> 
   
</head>
<body>
  <nav>
   {{--  <ul>
      <li class="active"><a href="/">Home</a></li>
      <li><a href="/about">Sobre</a></li>
      <li><a href="/contact">Contacto</a></li>
      <li><a href="/portafolio">Porta</a></li>
    </ul> --}}
  </nav>
  @yield('content')
</body> 
</html>