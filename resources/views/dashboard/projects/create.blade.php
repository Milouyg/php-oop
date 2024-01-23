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
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Project aanmaken!") }}
                    <form method="post" action="{{route('dashboard/store')}}" class="bg-white rounded px-8 pt-6 pb-8 mb-4">
                        @include('dashboard/projects/form', ['route'=>route('dashboard/store'), 'method'=>'post'])
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
