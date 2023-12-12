@extends('homepage.base')
@section('title')
    Categories
@endsection

@section('content')
    <div class="py-10">
        <h1 data-aos="zoom-in" class="mb-10 text-center text-4xl font-bold"><b>Product Categories</b></h1>
        <div class="mx-auto grid max-w-6xl grid-cols-1 gap-5 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
            {{-- @for ($i = 0; $i < 3; $i++) --}}
            @foreach ($categories as $category)
                <div data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="1000"
                    class="mx-5 flex flex-col rounded-lg border border-gray-200 bg-white shadow dark:border-gray-700 dark:bg-gray-800 sm:mx-5 md:mx-0">
                    <a href="#">
                        <div class="aspect-square overflow-hidden bg-gray-200">
                            <img class="h-full w-full object-cover" src="{{ asset('storage/' . $category->image) }}"
                                alt="" />
                        </div>
                    </a>
                    <div class="flex flex-grow flex-col justify-between p-3">
                        <div>
                            <a href="#">
                                <!-- Menggunakan truncate untuk memotong teks jika terlalu panjang -->
                                <h5 class="mb-2 truncate text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    {{ $category->nama }}</h5>
                            </a>
                            <!-- Menggunakan line-clamp untuk membatasi panjang deskripsi -->
                            <p class="mb-3 line-clamp-3 font-normal text-gray-700 dark:text-gray-400">
                                {{ $category->deskripsi }}</p>
                        </div>
                        <div class="mt-auto">
                            <a href="/productlist/{{ $category->id }}"
                                class="inline-flex items-center rounded-lg bg-blue-700 px-3 py-2 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Read more
                                <svg class="ms-2 h-3.5 w-3.5 rtl:rotate-180" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
            {{-- @endfor --}}
        </div>
    </div>
@endsection
