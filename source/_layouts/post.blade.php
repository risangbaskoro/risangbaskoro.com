@extends('_layouts.master')

@push('meta')
    <meta name="description" content="{{ $page->description }}">
    <title>{{ $page->title }} | {{ $page->siteName }}</title>
@endpush

@section('body')
    @include('_partials.header')

    <div class="prose mx-auto">
        <h1>
            {{ $page->title }}
        </h1>

        {!! $page !!}
    </div>

    @include('_partials.giscus')

    @include('_partials.footer')
@endsection