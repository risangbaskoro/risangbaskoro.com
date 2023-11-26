@extends('_layouts.master')

@push('meta')
    <meta name="description" content="{{ $page->excerpt(50) }}">
    <title>{{ $page->title }} | {{ $page->siteName }}</title>
@endpush

@section('body')
    @include('_partials.header')

    @if($page->featureImage)
        <img
                class="w-full object-cover aspect-postImage mb-8" src="{{ $page->featureImage['url'] }}"
                alt="{{ $page->featureImage['title'] }}"
        >
    @endif

    <div class="prose prose-invert mx-auto">
        <h1>
            {{ $page->title }}
        </h1>

        {!! $page !!}
    </div>

    @include('_partials.giscus')

    @include('_partials.footer')
@endsection