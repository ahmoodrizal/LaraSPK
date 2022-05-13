@extends('layouts.app')

@section('content')
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
        Studi Kasus {{ $project->name }}
    </h2>
    @include('pages.project.criteria')
    @include('pages.project.alternative')
    @include('pages.project.step1')
    @include('pages.project.step2')
    @include('pages.project.step3')
    @include('pages.project.step4')
@endsection
