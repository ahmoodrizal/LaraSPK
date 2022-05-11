@extends('layouts.app')

@section('content')
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
        Buat Studi Kasus
    </h2>
    <div class="w-full overflow-hidden rounded-lg shadow-xs">
        <div class="w-2/3 overflow-x-auto">
            <form action="{{ route('dashboard.store') }}" method="post">
                @csrf
                <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
                    <label class="block text-sm mb-3">
                        <span class="text-gray-700 dark:text-gray-400">Studi Kasus</span>
                        <input type="text" name="name"
                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" />
                    </label>
                    <label class="block text-sm mb-3">
                        <span class="text-gray-700 dark:text-gray-400">Metode</span>
                        <input type="text" name="method"
                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" />
                    </label>
                </div>
                <button type="submit"
                    class="flex items-center justify-between w-1/5 px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                    Submit Data
                </button>
            </form>
        </div>
    </div>
@endsection
