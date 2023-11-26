<header class="sticky z-50 top-0 backdrop-blur-xl bg-dark-900/75 hover:bg-dark-900 transition">
    <nav class="absolute p-6 grid grid-cols-3 justify-between items-center w-full">
        <a href="/"
           @class([
                "pointer-events-none" => $page->getUrl() === $page->baseUrl.'/',
           ])
        >
            <img src="https://github.com/risangbaskoro.png?size=50" alt="Logo" draggable="false">
        </a>

        <div class="flex space-x-4 justify-center items-center">
            @foreach($page->navigations as $nav)
                <a href="{{ $page->baseUrl . $nav->link }}"
                   @class([
                        "px-4 py-2 hover:bg-dark-700 transition duration-300 ease-in-out rounded-lg hover:shadow !shadow-dark-600",
                        "pointer-events-none" => $page->getUrl() === $page->baseUrl . $nav->link,
                    ])
                >
                    {{ $nav->title }}
                </a>
            @endforeach
        </div>
    </nav>

    <div class="h-24"></div>
</header>