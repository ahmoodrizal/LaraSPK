@extends('layouts.app')

@section('content')
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
        Dashboard
    </h2>
    <!-- New Table -->
    <div class="w-full overflow-hidden rounded-lg shadow-xs">
        <div class="w-full overflow-x-auto">
            <table class="w-full whitespace-no-wrap">
                <thead>
                    <tr
                        class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                        <th class="px-4 py-3">#</th>
                        <th class="px-4 py-3">Studi Kasus</th>
                        <th class="px-4 py-3">DSS Method</th>
                        <th class="px-4 py-3">Date Created</th>
                        <th class="px-4 py-3">Action</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                    @forelse ($projects as $project)
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3 text-sm">
                                {{ $loop->index + 1 }}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{ $project->name }}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{ $project->method }}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{ $project->created_at->format('d M Y') }}
                            </td>
                            <td class="px-4 py-3 text-xs">
                                <a href="{{ route('dashboard.show', $project->slug) }}"
                                    class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                                    Formula
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3 text-sm text-center" colspan="5">
                                No Projects Data
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
