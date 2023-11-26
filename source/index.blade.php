@extends('_layouts.main')

@section('body')
    <div class="p-8">
        <h1 class="text-3xl font-bold">Hello world!</h1>

        <ul>
            @foreach($posts as $post)
                <li>
                    <a href="{{ $post->getUrl() }}">{{ $post->title }}</a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
