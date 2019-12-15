<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="base-url" content="{{url('/').'/'}}">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Rcksld</title>

        @yield('header')

        <link rel="stylesheet"
            href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
            integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
            crossorigin="anonymous">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
      
        @yield('css')

    </head>
    <body>

        <!-- partial -->
        <div class="main-panel">
            <div class="non-padding-content">
                
                <!-- non padding content -->
                @yield('content')
                    

            </div>
         
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js//custom/main.js') }}"></script>  
        @yield('script')


    </body>
</html>