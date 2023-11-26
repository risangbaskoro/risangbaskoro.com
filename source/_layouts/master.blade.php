<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="canonical" href="{{ $page->getUrl() }}">

        <link rel="icon" type="image/png" href="https://github.com/risangbaskoro.png?size=50" />

        @stack('meta')

        <title>{{ $page->siteName }}</title>

        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
    </head>
    <body class="text-white bg-dark-900 font-sans antialiased">
        @yield('body')
    </body>
</html>
