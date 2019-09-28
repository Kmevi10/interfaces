<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>NBA S</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body, a {
                background-color: #fff;
                color: #000000 !important;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            
            body{
                background-image: '/../../public/imgs/welcome.jpg';
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .title_homepage{
                border-radius: 5000px;
                background-color: rgb(232, 106, 51, 0.7);
                -webkit-transition: 0.15s all;   
                -webkit-transition-delay: 0.15s; 
                -moz-transition: 0.15s all;   
                -moz-transition-delay: 0.15s; 
                -ms-transition: 0.15s all;   
                -ms-transition-delay: 0.15s; 
                -o-transition: 0.15s all;   
                -o-transition-delay: 0.15s; 
                transition: 0.15s all;   
                transition-delay: 0.15s;
            }

            .title_homepage:hover{
                border-radius: 5000px;
                background-color: rgb(232, 106, 51, 1);
                -webkit-transition-delay: 0.15s;
                -moz-transition-delay: 0.15s;
                -ms-transition-delay: 0.15s;
                -o-transition-delay: 0.15s;
                transition-delay: 0.15s;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md title_homepage">
                    NBA Simulate
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Partidos</a>
                    <a href="https://laracasts.com">Más valorados</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
