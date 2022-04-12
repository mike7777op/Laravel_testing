<!DOCTYPE html>
<html>
    <head>
        <title>Larvel測試網站</title>
        @include('layouts.meta')
        @include('layouts.css')
        <script src='{{ mix('/js/app.js') }}'></script>
        <script src="js/jquery-3.2.1.min.js"></script>

        
    </head>
    <body>
        <div class='container'>
            @yield('content')
        </div>
    </body>
</html>
