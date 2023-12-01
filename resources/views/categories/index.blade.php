@extends('base')

@section('header', 'Categories')

@section('content')
    @if ($error !== null)
        <div class="mb-4 rounded-lg bg-red-50 p-4 text-sm text-red-800 dark:bg-gray-800 dark:text-red-400" role="alert">
            {{ $error }}
        </div>
    @endif

    <a type="button" href="/category/create"
        class="mb-2 me-2 rounded-lg bg-blue-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add
        category</a>

    <hr class="my-8 h-px border-0 bg-gray-200 dark:bg-gray-700">

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">
            <thead class="bg-gray-50 text-xs uppercase text-gray-700 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Image
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Description
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr onclick="window.location.href='/category/{{ $category->id }}'"
                        class="border-b odd:bg-white even:bg-gray-50 hover:bg-slate-200 dark:border-gray-700 odd:dark:bg-gray-900 even:dark:bg-gray-800">
                        <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
                            {{ $category->id }}
                        </th>
                        <td class="w-28 px-6 py-4">
                            <img src={{ asset('storage/' . $category->image) }} alt="image">
                        </td>
                        <td class="px-6 py-4">
                            {{ $category->nama }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $category->deskripsi }}
                        </td>
                        <td class="px-6 py-4">
                            <a href="/category/{{ $category->id }}/edit"
                                class="font-medium text-blue-600 hover:underline dark:text-blue-500">Edit</a>
                            <form action="{{ url('/category/' . $category->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="font-medium text-red-600 hover:underline dark:text-red-500"
                                    type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
