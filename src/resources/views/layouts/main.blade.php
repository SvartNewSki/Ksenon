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
        </main>
        <footer class="footer">
            @include('layouts.footer')
        </footer>
    </div>
    
    @vite(['resources/js/app.js'])
</body>
</html>