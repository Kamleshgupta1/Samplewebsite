<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SampleWebsite</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
        <link rel="stylesheet" href="/css/app.css">
    </head>
    
    <body>
    
        @include('inc.navbar')
        
        <div class="container">
            
            @if(Request::is('/'))
            
                @include('inc.showcase')
            @endif
            
            <div class="row">

                <div class="col-4">
                    @include('inc.sidebar')
                </div>

                <div class="col-4">
                    @yield('content')
                </div>

    <!--        @section('sidebar')
                <div class="sidebar">
                    <h3>this is sidebar</h3>

                    @show
                </div>
            -->

            </div>
        </div>
        
        <footer id="footer" class="text-center">
        
            <p>Copyright 2019 &copy;</p>
            
        </footer>
        
    </body>
</html>