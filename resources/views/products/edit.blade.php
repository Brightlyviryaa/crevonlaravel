@extends('base')

@section('header', 'Edit product')

@section('content')
    @if ($error !== null)
        <div class="mb-4 rounded-lg bg-red-50 p-4 text-sm text-red-800 dark:bg-gray-800 dark:text-red-400" role="alert">
            {{ $error }}
        </div>
    @endif

    <div
        class="mx-auto w-full max-w-sm rounded-lg border border-gray-200 bg-white p-4 shadow dark:border-gray-700 dark:bg-gray-800 sm:p-6 md:p-8">
        <form class="mx-auto max-w-sm" method="POST" action="/product/{{ $product->id }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-5">
                <label for="nama" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                <input type="text" id="nama" name="nama" value="{{ old('nama', $product->nama) }}"
                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500">
            </div>
            @error('nama')
                <div class="text-red-500">{{ $message }}</div>
            @enderror

            <label for="spesifikasi"
                class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Spesifikasi</label>
            <textarea id="spesifikasi" rows="4" name="spesifikasi"
                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                placeholder="Spesifikasi...">{{ old('spesifikasi', $product->spesifikasi) }}</textarea>
            @error('spesifikasi')
                <div class="text-red-500">{{ $message }}</div>
            @enderror

            <label for="about" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">About</label>
            <textarea id="about" rows="4" name="about"
                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                placeholder="About...">{{ old('about', $product->about) }}</textarea>
            @error('about')
                <div class="text-red-500">{{ $message }}</div>
            @enderror

            <label for="category_id" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Category</label>
            <select name="category_id" id="category_id"
                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" @if ($category->id == $product->category_id) selected @endif>
                        {{ $category->nama }}</option>
                @endforeach
            </select>
            @error('category_id')
                <div class="text-red-500">{{ $message }}</div>
            @enderror

            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white" for="image">Upload Image</label>
            <input name="image"
                class="block w-full cursor-pointer rounded-lg border border-gray-300 bg-gray-50 text-sm text-gray-900 focus:outline-none dark:border-gray-600 dark:bg-gray-700 dark:text-gray-400 dark:placeholder-gray-400"
                aria-describedby="user_avatar_help" id="image" type="file">
            @error('image')
                <div class="text-red-500">{{ $message }}</div>
            @enderror

            <button type="submit"
                class="mt-5 w-full rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 sm:w-auto">Submit</button>
        </form>
    </div>

    <div class="mx-auto mb-4 mt-5 max-w-sm rounded-lg bg-yellow-50 p-4 text-sm text-yellow-800 dark:bg-gray-800 dark:text-yellow-300"
        role="alert">
        <span class="font-bold">Informasi</span><br />File yang diterima hanya berupa file dengan ekstensi .jpeg dan .png.
        Silakan konversi file terlebih dahulu sebelum mengunggah. Terima kasih.
    </div>
@endsection
