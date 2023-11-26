@extends('_layouts.main')

@section('body')
    <div class="p-8">
        <h1 class="text-3xl font-bold">Hello world!</h1>

        @foreach($posts as $post)
            <div class="prose">
                <h1>
                    {{ $post->title }}
                </h1>

                {!! $post !!}
            </div>
        @endforeach
    </div>
@endsection
