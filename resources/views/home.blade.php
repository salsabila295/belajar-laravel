<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale-1.0">
    <meta http-equiv="X-UA-Compatible" content="le-edge">
    <link rel-"stylesheet" href="/assets/css/bootstrap.win.css"
    <title>@yield('title')</title>
</head>
<body> 
    @include('views,_navigasi')
    @yield("content")
</body>
</html>