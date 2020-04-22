<!DOCTYPE html>
<html>
    <head>
        <title>Vue Practice</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"/>
    </head>

    <body>
    <!-- header -->
    @include('layout.header')
    <div id="app">
    <!-- content -->
    @yield('content')
    
    </div
    @include('layout.footer')
        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>