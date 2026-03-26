<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/main.css'])
    <title>Document</title>
</head>
<body>
    <div class="wrapper">
        <header class="header">
            @include('layouts.header')<br>
        </header>
        <main class="main">
            @yield('content')<br>
            <img src="{{ asset('/images/planet.png') }}">
            <div class="circle"></div>
            <div class="circle2"></div>
            <div class="circle3"></div>
            <div class="project1">
                <a href="about">
                    {{-- <img src="{{ asset('/images/planet.png') }}"> --}}
                </a>
            </div>
            <div class="project2">
                <a href="about">
                    <img src="{{ asset('/images/gamepad.png') }}">
                </a>
            </div>
        </main>
        <footer class="footer">
            @include('layouts.footer')
        </footer>
    </div>
    
    
</body>
</html>