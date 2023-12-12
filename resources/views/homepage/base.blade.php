<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @yield('css')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body class="min-h-screen">
    <nav class="border-gray-200 bg-[#008FD7] dark:bg-gray-900">
        <div class="mx-auto flex max-w-6xl flex-wrap items-center justify-between py-4">
            <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('aboutAsset/logo.png') }}" class="h-8" alt="Flowbite Logo" />
            </a>
            <div class="flex md:order-2">

                <form action="{{ route('search') }}" method="GET">
                    <div class="relative hidden md:block">
                        <div class="pointer-events-none absolute inset-y-0 start-0 flex items-center ps-3">
                            <svg class="h-4 w-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                            <span class="sr-only">Search icon</span>
                        </div>
                        <input type="text" name="query" id="search-navbar"
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2 ps-10 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                            placeholder="Search...">
                    </div>
                    <button type="submit" data-collapse-toggle="navbar-search" aria-controls="navbar-search"
                        aria-expanded="false"
                        class="me-1 hidden rounded-lg p-2.5 text-sm text-white hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-700 md:hidden">
                        <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                        <span class="sr-only">Search</span>
                    </button>
                </form>
                <button data-collapse-toggle="navbar-search" type="button"
                    class="inline-flex h-10 w-10 items-center justify-center rounded-lg p-2 text-sm text-white hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600 md:hidden"
                    aria-controls="navbar-search" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div class="hidden w-full items-center justify-between md:order-1 md:flex md:w-auto" id="navbar-search">

                <ul
                    class="mt-4 flex flex-col p-4 font-medium rtl:space-x-reverse dark:border-gray-700 dark:bg-gray-800 md:mt-0 md:flex-row md:space-x-8 md:border-0 md:p-0 md:dark:bg-gray-900">
                    <li>
                        <a href="/"
                            class="block rounded bg-blue-700 px-3 py-2 text-white md:bg-transparent md:p-0 md:text-blue-700 md:dark:text-blue-500"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="/about"
                            class="block rounded px-3 py-2 text-white hover:bg-gray-100 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:p-0 md:hover:bg-transparent md:hover:text-blue-700 md:dark:hover:bg-transparent md:dark:hover:text-blue-500">About</a>
                    </li>
                    <li>
                        <a href="/categories"
                            class="block rounded px-3 py-2 text-white hover:bg-gray-100 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:p-0 md:hover:bg-transparent md:hover:text-blue-700 md:dark:hover:bg-transparent md:dark:hover:text-blue-500">Products</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    @yield('content')



    <footer
        class="sticky top-[100%] w-full border-t border-gray-200 bg-white p-4 shadow dark:border-gray-600 dark:bg-gray-800 md:flex md:items-center md:justify-between md:p-6">
        <span class="text-sm text-gray-500 dark:text-gray-400 sm:text-center">© {{ now()->year }} <a href="/"
                class="hover:underline">PT Crevon Indonesia</a>. All Rights Reserved.
        </span>
        <ul class="mt-3 flex flex-wrap items-center text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0">
            <li>
                <a href="#" class="me-4 hover:underline md:me-6">About</a>
            </li>
            <li>
                <a href="#" class="me-4 hover:underline md:me-6">Home</a>
            </li>
            <li>
                <a href="#" class="me-4 hover:underline md:me-6">Products</a>
            </li>
            <li>
                <a href="#" class="hover:underline">Contact</a>
            </li>
        </ul>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
