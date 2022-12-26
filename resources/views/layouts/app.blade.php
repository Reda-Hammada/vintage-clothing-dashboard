<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>


    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="icon"  sizes="32x32" type="image/x-icon" href="./images/logo.jpg">


</head>
<body class="font-poppins bg-grey-color">


            @yield('content')



    <!--Script-->
    @vite([ 'resources/js/app.js'])
</body>
</html>
