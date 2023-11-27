@extends('_layouts.main')

@section('body')
    @include('_partials.header')

    <div class="p-8">
        <h1 class="text-3xl font-bold mb-4 text-center md:text-left">
            Featured Posts
        </h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 justify-center items-end gap-8">
            @foreach($posts->filter(fn ($post) => $post->isFeatured)->take(4) as $post)
                @include('_partials.post-card', ['post' => $post])
            @endforeach
        </div>
    </div>

    <div class="p-8">
        <h1 class="text-3xl font-bold mb-4 text-center md:text-left">
            Posts
        </h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 justify-center items-end gap-8">
            @foreach($posts as $post)
                @include('_partials.post-card', ['post' => $post])
            @endforeach
        </div>
    </div>

    @include('_partials.footer')
@endsection
