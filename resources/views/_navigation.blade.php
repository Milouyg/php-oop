<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav class="flex gap-4 items-center">
            <li class="hover:cursor-pointer @if(Route::currentRouteName() == 'homepage') text-red-500 @else text-red-500 @endif text-black">
                <a href="{{ route('homepage') }}">Home</a> 
            </li>
            <li class="hover:cursor-pointer @if(Route::currentRouteName() == 'projects.project') text-red-500 @else text-red-500 @endif text-black">
                <a href="{{ route('projects.project') }}">Projecten</a> 
            </li>
            <li class="hover:cursor-pointer">
                <a href="">Contact</a> 
            </li>
        </nav>
</body>
</html>