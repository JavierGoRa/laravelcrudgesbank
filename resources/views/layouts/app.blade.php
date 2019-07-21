<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('titulo') - GesBank</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="http://fonts.googleapis.com/icon?family-Material+icons">
</head>
<body>
    <div id="app">
        @guest
            @include('partials.menuGuest')
        @else   
            @include('partials.menuAuth')
        @endguest

        @yield('cabecera')
        <div class="container">
        <main class="py-4">
            @yield('content')
        </main>
        <hr>
        &copy; Javier González Ramírez | Desarrollo de Aplicaciones Web
        <br>
        </div>

    </div>
</body>
</html>
