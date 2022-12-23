<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>


    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="icon"  sizes="32x32" type="image/x-icon" href="./images/306232569_430145765882111_8714667397772365812_n.jpg">

    <!--CSS-->
    @vite(['resources/sass/app.scss'])
</head>
<body>
    

            @yield('content')



    <!--Script-->
    @vite([ 'resources/js/app.js'])
</body>
</html>