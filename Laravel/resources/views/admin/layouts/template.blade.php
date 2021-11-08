<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <meta name="language" content="English">
    <link rel="shortcut icon" href="{{asset('uploads/images/favico.ico')}}" type="image/x-icon" />
    <link rel="icon" href="{{asset('uploads/images/favico.ico')}}" type="image/x-icon" />
    <meta name="author" content="AP SOFT">
    <link rel="preload" href="{{asset('js/app.js')}}" as="script">
    <link rel="preload" href="{{asset('css/app.css')}}" as="style">
    <link rel="preload" href="https://cdn.staticaly.com/gh/hung1001/font-awesome-pro/4cac1a6/css/all.css" as="style" />
    <link href="https://cdn.staticaly.com/gh/hung1001/font-awesome-pro/4cac1a6/css/all.css" rel="stylesheet"
        type="text/css" />
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script defer src="{{asset('js/app.js')}}"></script>
    <title>@yield('title')</title>
</head>

<body>

    @yield('nav')
    @yield('body')

    @yield('script')
</body>

</html>