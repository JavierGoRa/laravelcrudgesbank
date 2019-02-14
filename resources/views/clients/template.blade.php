<!doctype html>
<html lang="en" class="h-100">
  @include('partials.head')
  
    <body class="d-flex flex-column h-100">

        <!-- Fixed navbar -->
        @section('menu')
            @include('partials.menu')
        @show

        @yield('cabecera')

        <!-- Begin page content -->
        <div class="container">
            @yield('content')
        </div>
        @include('partials.paginado')
        @include('partials.footer')

        @include('partials.jsbootstrap')

    </body>
</html>