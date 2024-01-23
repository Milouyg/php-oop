<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-nav-link>
            <x-nav-link :href="route('dashboard/create')" :active="request()->routeIs('dashboard/create')">
                {{ __('New project') }}
            </x-nav-link>
        </h2>
    </x-slot>

    <div class="py-12">
        @csrf
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Projecten overzicht!") }}
                    <ul class="flex flex-col">
                        @foreach($projects as $project)
                        <li class="flex flex-row justify-between">
                            <span>{{ $project->title }}</span>
                            <a href="{{route('dashboard/edit', $project)}}" class="text-red-600">wijzigen</a>
                            {{ method_field('delete') }}
                            <button type="verwijder" class="rounded-md bg-orange">
                                Verwijder
                            </button>
                            @if (session('alert'))
                                <div class="p-2 bg-yellow border-2 rounded">
                                    {{ session('alert') }}
                                </div>
                            @endif
                        </li>
                        @endforeach
                    </ul>
                    {{$projects->links()}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
