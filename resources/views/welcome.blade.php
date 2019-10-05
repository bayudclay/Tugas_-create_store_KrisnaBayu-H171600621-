<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: bold;
                height: 100vh;
                margin: 0;
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
                color: #000;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                color: #000;
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Logout</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Web Open source 
                </div>

                <div class="links">
                    <a href="http://127.0.0.1:8000/kategori_artikel">Kategori Artikel</a>
                    <a href="http://127.0.0.1:8000/kategori_berita">Kategori Berita</a>
                    <a href="http://127.0.0.1:8000/kategori_galeri">Kategori Galeri</a>
                    <a href="http://127.0.0.1:8000/kategori_pengumuman">Kategori Pengumuman</a>
                    <a href="http://127.0.0.1:8000/artikel">Artikel</a>
                    <a href="http://127.0.0.1:8000/berita">Berita</a>
                    <a href="http://127.0.0.1:8000/galeri">Galeri</a>
                    <a href="http://127.0.0.1:8000/pengumuman">Pengumuman</a>
                </div>
            </div>
        </div>
    </body>
</html>
