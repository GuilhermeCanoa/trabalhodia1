<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/orlando-mobile.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/orlando.css') }}">



        
    </head>
    <body>

    @include ('auxiliar.header')

            <div class="content">
                @yield('content')
            </div>

    @include ('auxiliar.footer')
    

    </body>
</html>
