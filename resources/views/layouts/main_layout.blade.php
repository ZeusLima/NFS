<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ ENV('APP_NAME') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="short cut icon" href="{{ asset('assets/LogoNFS-FundoBranco.png') }}">
    {{-- <link rel="styleshee" href="{{ assets/bootstrap/bootstrap.min.css }}"> --}}
    <script src="https://kit.fontawesome.com/8e1950bbdd.js" crossorigin="anonymous"></script>
  </head>

  <body>

    @yield('content')


        {{-- <script src="{{ asset('assets/bootstrap/bootstrap.bundle.min.js') }}"></script> --}}
  </body>


