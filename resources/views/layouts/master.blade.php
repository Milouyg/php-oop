<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    
    <header> @include('layouts.partials.navigation') </header>

    @yield('content')

    <footer class="px-8 h-1/5 flex justify-center items-center">
        <p class="">Dit is de footer</p>
    </footer>
</body>

</html>