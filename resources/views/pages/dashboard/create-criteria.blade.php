@extends('layouts.app')

@section('content')
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
        Create Criteria Data
    </h2>
    <div
        class="px-3 py-3 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-red-600 border border-transparent rounded-md active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-red w-full lg:w-2/4 mb-6">
        Harap Gunakan Skala 1-100 untuk Penilaian
    </div>
    <div class="w-full overflow-hidden rounded-lg shadow-xs">
        <div class="w-full lg:w-2/4 overflow-x-auto">
            <form action="#" method="post">
                @csrf
                <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
                    <label class="block text-sm mb-3">
                        <span class="text-gray-700 dark:text-gray-400">Criteria Name</span>
                        <input type="text" name="name"
                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" />
                    </label>
                    <label class="block text-sm mb-3">
                        <span class="text-gray-700 dark:text-gray-400">Criteria Weight</span>
                        <input type="number" name="weight"
                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" />
                    </label>
                    <button type="submit"
                        class="px-3 py-1 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-green-600 border border-transparent rounded-md active:bg-green-600 hover:bg-green-700 focus:outline-none focus:shadow-outline-green">
                        Create Criteria
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
