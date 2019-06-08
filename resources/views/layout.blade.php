<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title','???')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>

    @yield('content')

    <ul>
        <li><a href="/contact">Contact</a> us to find out more!</li>
        <li><a href="/about">About us</a></li>
        <li><a href="/">Home</a></li>
    </ul>
</body>
</html>
