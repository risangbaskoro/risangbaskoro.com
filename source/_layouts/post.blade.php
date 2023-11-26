@extends('_layouts.master')

@push('meta')
    <meta name="description" content="{{ $page->description }}">
    <title>{{ $page->title }}</title>
@endpush

@section('body')
    <div class="prose mx-auto">
        <h1>
            {{ $page->title }}
        </h1>

        {!! $page !!}
    </div>
@endsection