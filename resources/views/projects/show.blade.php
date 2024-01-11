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

        @include('layouts.partials.navigation')

    <main class=" flex gap-4 w-screen h-screen bg-slate-200 p-4">
        <h2>{{ $project->title }}</h2>
    </main>
    
</body>
</html>

