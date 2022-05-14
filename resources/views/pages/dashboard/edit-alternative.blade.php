@extends('layouts.app')

@section('content')
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
        Edit Alternative Data - {{ $alternative->name }}
    </h2>
    <div
        class="px-3 py-3 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-red-600 border border-transparent rounded-md active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-red w-full lg:w-2/4 mb-6">
        Harap Gunakan Skala 1-100 untuk Penilaian
    </div>
    <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800 w-full lg:w-2/4">
        <form action="" method="post">
            @csrf
            @method('PUT')
            <label class="block text-sm mb-4">
                <span class="text-gray-700 dark:text-gray-400">Alternative Name</span>
                <input type="name" name="name" value="{{ $alternative->name }}"
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" />
            </label>
            <label class="block text-sm mb-4">
                <span class="text-gray-700 dark:text-gray-400">C1 Score</span>
                <input type="number" name="c1" value="{{ $alternative->c1 }}"
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" />
            </label>
            <label class="block text-sm mb-4">
                <span class="text-gray-700 dark:text-gray-400">C2 Score</span>
                <input type="number" name="c2" value="{{ $alternative->c2 }}"
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" />
            </label>
            <label class="block text-sm mb-4">
                <span class="text-gray-700 dark:text-gray-400">C3 Score</span>
                <input type="number" name="c3" value="{{ $alternative->c3 }}"
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" />
            </label>
            <label class="block text-sm mb-4">
                <span class="text-gray-700 dark:text-gray-400">C4 Score</span>
                <input type="number" name="c4" value="{{ $alternative->c4 }}"
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" />
            </label>
            <button type="submit"
                class="px-3 py-1 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-green-600 border border-transparent rounded-md active:bg-green-600 hover:bg-green-700 focus:outline-none focus:shadow-outline-green">
                Update Alternative Data
            </button>
        </form>
    </div>
@endsection
