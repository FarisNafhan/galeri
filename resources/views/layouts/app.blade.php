<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('galeri/style.css') }}">
</head>
<body>
    @include('partials.navbar')
    @include('partials.album')
    <div class="container">
        @yield('content')
    </div>
</body>
</html>