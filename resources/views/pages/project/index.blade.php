@extends('layouts.app')

@section('content')
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
        Studi Kasus {{ $project->name }}
    </h2>
    @if ($project->criterias->sum('weight') != 100)
        <div
            class="px-3 py-3 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-red-600 border border-transparent rounded-md active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-red w-full lg:w-2/3 mb-6">
            PERHATIAN ! Total Akumulasi Beban Kriteria Harus 100
        </div>
    @endif
    @include('pages.project.criteria')
    @if (!($project->criterias->sum('weight') != 100))
        @include('pages.project.alternative')
        @if ($project->alternatives->count() >= 3)
            @include('pages.project.step1')
            @include('pages.project.step2')
            @include('pages.project.step3')
            @if ($project->alternatives->sum('result') != null)
                @include('pages.project.step4')
            @endif
        @endif
    @endif

@endsection
