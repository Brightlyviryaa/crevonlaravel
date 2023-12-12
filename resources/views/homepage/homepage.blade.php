@extends('homepage.base')

@section('title')
    Welcome to Crevon
@endsection

@section('content')
    <div class="mx-auto mb-10 max-w-6xl px-3 md:px-0">
        <section class="flex flex-col-reverse items-center justify-between py-[4rem] md:flex-row">
            <div data-aos="fade-up" class="flex w-full flex-col items-start justify-center md:w-1/2">
                <h5 class="mb-4 text-blue-300">PT. Crevon Indonesia</h5>
                <h1 class="mb-4 text-4xl font-black">Welcome to Crevon</h1>
                <h5 class="mb-4 text-gray-500">Established in 2007, PT. Crevon Indonesia has been a prominent player in the
                    automotive industry for over a decade. Our dedication to providing high-quality products has earned us a
                    reputation as a trusted name in both daily use and hobbyist automotive circles.</h5>
                <div class="flex flex-row">
                    <button onclick="window.location.href='/categories'"
                        class="mb-2 me-2 rounded-lg bg-blue-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">See
                        our products</button>
                    <button
                        class="mb-2 me-2 flex flex-row items-center justify-between rounded-lg bg-green-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                        <img class="me-2 h-6 w-6" src="{{ asset('asset/icons8-whatsapp.svg') }}" alt="WhatsApp Icon">
                        <span>Contact Us</span>
                    </button>
                </div>
            </div>
            <img data-aos="zoom-in-left" class="mb-10 w-1/2 md:mb-0 md:w-1/3" src="{{ asset('aboutAsset/logo2.png') }}"
                alt="Company Logo">
        </section>

    </div>
    <section data-aos="flip-down" data-aos-duration="1000" class="mt-10 bg-gray-50 py-10">
        <h1 data-aos="fade-up" class="mb-4 text-center text-2xl font-semibold">Our Partners</h1>
        <div class="grid grid-cols-1 gap-4 md:mx-0 md:grid-cols-3">
            <div class="mb-4 flex items-center justify-center md:mb-0">
                <img data-aos="zoom-in-up" src="{{ asset('logos/crevon.png') }}" alt="Crevon Logo">
            </div>
            <div class="mb-4 flex items-center justify-center md:mb-0">
                <img data-aos="zoom-in-up" src="{{ asset('logos/xwz.png') }}" alt="XWZ Logo">
            </div>
            <div class="mb-4 flex items-center justify-center md:mb-0">
                <img data-aos="zoom-in-up" src="{{ asset('logos/128plus.png') }}" alt="128Plus Logo">
            </div>
        </div>
    </section>
    <section data-aos="flip-down" class="flex flex-col bg-[#C7DEEA] px-5 py-12">
        <h1 data-aos="fade-up" class="mb-4 text-center text-2xl font-semibold">Our Products</h1>
        <div class="flex flex-wrap justify-center">
            @foreach ($products as $product)
                <div data-aos="zoom-in-up" class="w-full p-4 sm:w-1/2 md:w-1/3 lg:w-1/4">
                    <div class="rounded-lg border border-gray-200 bg-white shadow dark:border-gray-700 dark:bg-gray-800">
                        <a href="#">
                            <div class="aspect-square overflow-hidden bg-gray-200">
                                <img class="h-full w-full object-cover" src="{{ asset('storage/' . $product->image) }}"
                                    alt="{{ $product->nama }}" />
                            </div>
                        </a>
                        <div class="p-4">
                            <a href="#">
                                <h5 class="mb-2 text-xl font-bold text-gray-900 dark:text-white">
                                    {{ $product->nama }}
                                </h5>
                            </a>
                            <a href="/show/{{ $product->id }}"
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
        </div>
    </section>
@endsection
