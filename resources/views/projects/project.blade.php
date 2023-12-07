<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/dist/app.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>

        @include('_navigation')

    <main class=" flex gap-4 w-screen h-screen bg-slate-200 p-4">
        <article class="relative flex flex-col items-center w-72 h-48 shadow-lg bg-white rounded-lg gap-2">
            <img class="object-cover w-72 h-36 relative" src="https://placehold.co/300x150" alt="">
            <h1 class="absolute left-4">Project</h1>
            <button class="bg-red-600 rounded gap-2 absolute right-4 bottom-2 px-1 text-white hover:cursor-pointer">Klik hier</button>
        </article>

    </main>
    
</body>
</html>

