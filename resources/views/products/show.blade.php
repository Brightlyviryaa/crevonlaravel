@extends('base')

@section('header', 'products')

@section('content')
    <div class="col lg:row flex flex-wrap justify-between">
        <div class="flex w-[100%] items-center justify-start md:w-1/2">
            <img src={{ asset('storage/' . $product->image) }} alt="image" class="w-[100%] md:w-[30vw]">
        </div>
        <div class="w-1/2">
            <h1 class="mb-5 text-5xl font-bold">{{ $product->nama }}</h1>

            <p class="text-2xl font-medium">About:</p>
            <p class="mb-5 text-lg font-normal">{{ $product->about }}</p>

            <p class="text-2xl font-medium">Spesifikasi:</p>
            <p class="mb-5 text-lg font-normal">{{ $product->spesifikasi }}</p>
            <div class="row flex">
                <a type="button" href="/product/{{ $product->id }}/edit"
                    class="mb-2 me-2 rounded-full bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Edit</a>
                <form action="{{ url('/product/' . $product->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                        class="mb-2 me-2 rounded-full bg-red-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection
