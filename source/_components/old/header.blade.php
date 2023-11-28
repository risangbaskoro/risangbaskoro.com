<header class="sticky z-50 top-0 backdrop-blur-xl bg-dark-900/75 hover:bg-dark-900 transition">
    <nav class="absolute p-6 grid grid-cols-3 justify-between items-center w-full">
        <a href="/"
           class="w-fit"
           @class([
                "pointer-events-none" => $page->getUrl() === $page->baseUrl.'/',
           ])
        >
            <img src="https://github.com/risangbaskoro.png?size=50" alt="Logo" draggable="false">
        </a>

        <div class="flex space-x-4 justify-center items-center">
            @foreach($page->navigations as $nav)
                @include('_components.old.nav-link', ['nav' => $nav])
            @endforeach
        </div>
    </nav>

    <div class="h-24"></div>
</header>