<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/style.css?v=2') }}" rel="stylesheet" type="text/css"> 
    <link href="{{ asset('assets/css/font-awesome.css') }}" rel="stylesheet" type="text/css"> 
    <title>Document</title>
</head>
<body>
    <header id="header_wrapper">
        @yield('header')
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        
    </footer>
</body>
</html>