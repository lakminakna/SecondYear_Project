<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Parking.lk</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        @include('home.style')

    </head>
    <body>

        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <!-- <a href="{{ route('login') }}">Login</a> -->
                        <a href="cd1">Login</a>

                        @if (Route::has('register'))
                            <!-- <a href="{{ route('register') }}">Register</a> -->
                            <a href="cd2">Register</a>

                        @endif
                    @endauth
                </div>
            @endif


            <div class="content" style="body-background">
                <div class="title m-b-md">
                    PARKING
                </div>

                <div class="links">
                    <a href="#">park</a>
                    <a href="#">earn</a>
                    <a href="#">easy</a>
                    <a href="#">quick</a>
                    <a href="#">safe</a>
                    <a href="#">time</a>
                    <a href="#">trust</a>

                </div>
            </div>
            <div style="height: 45px;background-image:url('../public/css/images/1.jpg');border-radius: 5px;position:relative"></div>
        </div>

    </body>
</html>
