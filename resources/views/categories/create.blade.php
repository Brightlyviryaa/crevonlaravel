@extends('base')

@section('header', 'New Category')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <div class="mb-4 rounded-lg border border-red-800 bg-red-50 p-4 text-sm text-red-800 dark:bg-gray-800 dark:text-red-400"
                    role="alert">
                    {{ $error }}
                </div>
            @endforeach
        </div>
    @endif

    <div
        class="mx-auto w-full max-w-sm rounded-lg border border-gray-200 bg-white p-4 shadow dark:border-gray-700 dark:bg-gray-800 sm:p-6 md:p-8">
        <form class="mx-auto max-w-sm" method="POST" action="/category" enctype="multipart/form-data">
            @csrf
            <div class="mb-5">
                <label for="base-input" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                <input type="text" id="base-input" name="nama"
                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500">
            </div>
            <label for="message" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
            <textarea id="message" rows="4" name="deskripsi"
                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                placeholder="Leave a comment..."></textarea>
            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">Upload
                Image</label>
            <input name="image"
                class="block w-full cursor-pointer rounded-lg border border-gray-300 bg-gray-50 text-sm text-gray-900 focus:outline-none dark:border-gray-600 dark:bg-gray-700 dark:text-gray-400 dark:placeholder-gray-400"
                aria-describedby="user_avatar_help" id="user_avatar" type="file">
            <div class="mb-5 mt-1 text-sm text-gray-500 dark:text-gray-300" id="user_avatar_help">Dipakai untuk menampilkan
                gambar
                pada menu category</div>
            <button type="submit"
                class="w-full rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 sm:w-auto">Submit</button>
        </form>
    </div>

    <div class="mx-auto mb-4 mt-5 max-w-sm rounded-lg bg-yellow-50 p-4 text-sm text-yellow-800 dark:bg-gray-800 dark:text-yellow-300"
        role="alert">
        <span class="font-bold">Informasi</span><br />File yang di terima hanyalah file dengan extensi .jpeg dan .png
        convert
        file terlebih dahulu sebelum mengupload, terima kasih.
    </div>
@endsection
