@extends('base')

@section('header', 'Dashboard')

@section('content')
    <div class="container mx-auto">
        <div class="mt-8">
            <div class="items-center rounded-lg bg-white p-6 shadow-md">
                <div class="flex items-center justify-between">
                    <h2 class="text-2xl font-bold">Total Categories</h2>
                    <p class="text-lg font-semibold">Total Categories: {{ $totalCategories }}</p>
                    <a href="/category" class="rounded bg-blue-500 px-4 py-2 font-semibold text-white hover:bg-blue-600">
                        Manage Categories
                    </a>
                </div>

            </div>

        </div>
    </div>
@endsection
