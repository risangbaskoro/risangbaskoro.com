@extends('_layouts.main')

@section('body')
    @include('_partials.header')

    <div class="prose prose-invert mx-auto max-w-4xl py-20 md:py-32 px-6 lg:px-0">

        <h1 class="text-primary-400">
            I value your privacy
        </h1>
        <h2>
            Therefore...
        </h2>
        <p>
            I limit the tools I use that would attempt to track you.
        </p>
        <p>
            I use Google Analytics with every constraint we can put on it to keep it from getting all up in your
            personal information.
        </p>
        <p>
            I don't use any Facebook tracking pixels or anything else gross like that.
        </p>
        <p>
            If you comment using Giscus, your GitHub account information will be displayed on the site.
            The comments will be available in this site's repository discussion on GitHub.
        </p>
        <p>
            If you fill out a contact form, I don’t share your information with anyone else. I use it to provide you
            the service you’re requesting.
        </p>
        <p>
            ¯\_(ツ)_/¯ That's it.
        </p>

    </div>

    @include('_partials.footer')
@endsection
