<a href="{{ $post->getUrl() }}" class="mx-auto w-full">
    <div class="min-w-full max-w-sm rounded overflow-hidden shadow-md hover:shadow-lg transition-shadow !shadow-dark-600 border border-dark-600">
        @if($post->featureImage)
            <img
                    class="w-full object-cover aspect-video" src="{{ $post->featureImage['url'] }}"
                    alt="{{ $post->featureImage['title'] }}"
            >
        @endif
        <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2 line-clamp-1">{{ $post->title }}</div>
            <p class="text-sm line-clamp-3">
                {!! strip_tags($post->html) !!}
            </p>
        </div>
    </div>
</a>