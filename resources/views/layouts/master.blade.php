<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <title>Welcome</title>
</head>
<body>
    <h1>@yield('header')</h1>
    <div class="container">
        @yield('content')
    </div>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>