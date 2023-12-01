<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            @yield('header')
        </h2>
    </x-slot>

    <div class="px-[5%] py-12 md:px-[7rem]">
        @yield('content')
    </div>
</x-app-layout>
