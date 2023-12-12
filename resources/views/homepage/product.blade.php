@extends('homepage.base')

@section('title')
    {{ $product->nama }}
@endsection

@section('content')
    <div class="bg-gray-100">
        <div class="container mx-auto px-4 py-8">
            <div class="grid grid-cols-1 gap-8 md:grid-cols-2">
                <div class="md:order-2">
                    <h1 class="mb-5 text-2xl font-bold md:text-4xl">{{ $product->nama }}</h1>

                    <h5 class="text-md mb-1 font-semibold">Spesification:</h5>
                    <div id="specifications">
                        <p class="text-gray-700">{{ $product->spesifikasi }}</p>
                    </div>
                    <a href="https://www.whatsapp.com/" id="contact" class="mt-4 inline-block">
                        <button type="button"
                            class="rounded-lg bg-blue-500 px-4 py-2 font-semibold text-white focus:outline-none">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-whatsapp mr-2 inline-block" viewBox="0 0 16 16">
                                <path
                                    d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                            </svg>
                            Contact Us
                        </button>
                    </a>
                    <a href="/productlist/{{ $product->category->id }}" id="back"
                        class="mt-4 block text-sm font-semibold text-blue-500 hover:underline focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-arrow-left mr-1 inline-block" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8" />
                        </svg>
                        Back to Product List
                    </a>
                </div>
                <div class="aspect-w-1 aspect-h-1 md:order-1">
                    <img src="{{ asset('storage/' . $product->image) }}" class="rounded-lg object-cover shadow-md"
                        alt="Product Image">
                </div>
            </div>
        </div>
    </div>
@endsection
