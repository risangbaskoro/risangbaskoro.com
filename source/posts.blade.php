@extends('_layouts.main')

@section('body')
    @include('_partials.header')

    <div class="p-8">
        <h1 class="text-3xl font-bold mb-4">
            Posts
        </h1>

        <div class="grid grid-cols-4 gap-8">
            @foreach($posts->filter(fn ($post) => $post->isFeatured) as $post)
                <a href="{{ $post->getUrl() }}">
                    <div class="max-w-sm rounded overflow-hidden shadow-lg hover:shadow-xl transition-shadow">
                        {{--                        <img class="w-full aspect-square" src="https://source.unsplash.com/random" alt="Random image">--}}
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">{{ $post->title }}</div>
                            <p class="text-gray-700 text-sm">
                                {{ $post->excerpt() }}
                            </p>
                        </div>
                        {{--                    <div class="px-6 pt-4 pb-2">--}}
                        {{--                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>--}}
                        {{--                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>--}}
                        {{--                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>--}}
                        {{--                    </div>--}}
                    </div>
                </a>
            @endforeach
        </div>
    </div>

    @include('_partials.footer')
@endsection
