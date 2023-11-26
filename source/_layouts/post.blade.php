@extends('_layouts.master')

@push('meta')
    <meta name="og:type" content="article">
    <meta name="og:title" content="{{ $page->title }}">
    <meta name="og:description" content="{{ $page->metaDescription() }}">
    <meta name="og:url" content="{{ $page->getUrl() }}">
    <meta name="og:site_name" content="{{ $page->siteName }}">

    <meta name="description" content="{{ $page->metaDescription() }}">
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

    <div class="prose prose-invert mx-auto px-6 md:px-0">
        <h1>
            {{ $page->title }}
        </h1>

        {!! $page !!}
    </div>

    @include('_partials.giscus')

    @include('_partials.footer')
@endsection