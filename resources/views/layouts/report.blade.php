<!doctype html>
<html>
    <head>
        @include('include.head')
    </head>
    <body>
        
                
        <br>
        <div class="container">
                @yield('content')
        </div>

        
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        @yield('javascript')
    </body>
</html>