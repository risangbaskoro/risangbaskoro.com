@extends('_layouts.main')

@section('body')
    <div class="grid grid-cols-5 mx-auto">
        @include('_partials.kkn.sidebar')
        <main class="w-full px-8 md:px-0 max-auto col-span-full md:col-span-3 mb-16">
            <div class="prose max-w-7xl mb-8">
                @yield('content')
            </div>
            @include('_partials.giscus')
        </main>
    </div>
@endsection