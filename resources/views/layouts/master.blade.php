<html>
    <head>
        <title>App Name - @yield('title')</title>

        <meta name="csrf-token" content="{{ csrf_token() }}">

        
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    </head>
    <body>
        

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>