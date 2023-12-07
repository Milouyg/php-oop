<header class="flex flex-row justify-between px-8 h-1/5">
    <h1 class="flex text-3xl font-bold underline items-center"><a href="{{ route('homepage') }}">Logo</a></h1>
    <nav class="flex gap-4 items-center">
        <li class="hover:cursor-pointer list-none">
            <a href="{{ route('homepage') }}" class="no-underline {{ (Route::currentRouteName() == 'homepage') ? 'text-red-500' : 'text-black' }}">Home</a>
        </li>
        <li class="hover:cursor-pointer list-none">
            <a href="{{ route('projects.project') }}" class="no-underline {{ (Route::currentRouteName() == 'projects.project') ? 'text-red-500' : 'text-black' }}">Projecten</a> 
        </li>
        <li class="hover:cursor-pointer list-none">
            <a href="">Contact</a> 
        </li>
    </nav>
</header>
