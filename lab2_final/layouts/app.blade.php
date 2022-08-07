<html>
    <head>
        <title>
            App - @yield ('title')
        </title>
    </head>
    <body>
        @section('navbar')
        @include('includes.navbar')
        @show

        <div class="container">
            @yield('content')
        </div>

        <div class="container">
            @yield('form_create')
        </div>

        <div class="container">
            @yield('form_edit')
        </div>
    </body>
</html>
