@extends('_layouts.main')

@section('body')
    @include('_partials.header')

    <section id="hero" class="py-32">
        <div class="container content-container">
            <div class="prose prose-invert lg:prose-2xl max-w-none text-justify md:text-left">
                <h1 class="font-serif text-primary-400 font-italic">
                    From <em class="special-underline">Hobbyist</em> to Professional Web Application Developer
                </h1>
                <p>
                    In today's dynamic digital landscape, a robust online presence is crucial for businesses.
                    With expertise in PHP and Laravel, I specialize in building and consulting on top-tier web
                    applications.
                    My mission is to empower clients by solving their unique challenges and delivering exceptional
                    results.
                </p>
                @include('_partials.cta-button', [
                    'text' => 'See how can I help you',
                    'link' => '/coming-soon',
                ])
            </div>
        </div>
    </section>

    @include('_partials.special-underline')
    @include('_partials.footer')
@endsection
