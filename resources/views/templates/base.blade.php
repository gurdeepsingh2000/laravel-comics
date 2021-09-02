<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="./images/dc-logo.png"/>
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <style>
    .central{
        display:flex;
        justify-content:center;
        height:100px;
    }
        </style>
    <title>@yield('title')</title>
</head>
<body>
    <header>
        @include('templates.header')
    </header>

    <div class="container">
            @yield('content')
        </div>

    <footer>
        @include('templates.footer')
    </footer>
</body>
</html>