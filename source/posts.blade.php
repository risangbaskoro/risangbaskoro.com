@extends('_layouts.main')

@section('body')
    @include('_partials.header')

    <div class="p-8">
        <h1 class="text-3xl font-bold mb-4 text-center md:text-left">
            Featured Posts
        </h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 justify-center items-end gap-8">
            @foreach($posts->filter(fn ($post) => $post->isFeatured)->take(4) as $post)
                <a href="{{ $post->getUrl() }}" class="mx-auto w-full">
                    <div class="min-w-full max-w-sm rounded overflow-hidden shadow-md hover:shadow-lg transition-shadow !shadow-dark-600 border border-dark-600">
                        @if($post->featureImage)
                            <img
                                class="w-full object-cover aspect-video" src="{{ $post->featureImage['url'] }}"
                                alt="{{ $post->featureImage['title'] }}"
                            >
                        @endif
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">{{ $post->title }}</div>
                            <p class="text-sm line-clamp-3">
                                {!! strip_tags($post->html) !!}
                            </p>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>

    <div class="p-8">
        <h1 class="text-3xl font-bold mb-4 text-center md:text-left">
            Posts
        </h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 justify-center items-end gap-8">
            @foreach($posts as $post)
                <a href="{{ $post->getUrl() }}" class="mx-auto w-full">
                    <div class="min-w-full max-w-sm rounded overflow-hidden shadow-md hover:shadow-lg transition-shadow !shadow-dark-600 border border-dark-600">
                        @if($post->featureImage)
                            <img
                                    class="w-full object-cover aspect-video" src="{{ $post->featureImage['url'] }}"
                                    alt="{{ $post->featureImage['title'] }}"
                            >
                        @endif
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">{{ $post->title }}</div>
                            <p class="text-sm line-clamp-3">
                                {!! strip_tags($post->html) !!}
                            </p>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>

    @include('_partials.footer')
@endsection
