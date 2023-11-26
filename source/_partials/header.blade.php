<div class="p-6 grid grid-cols-3 justify-between items-center w-full">
    <a href="/">
        <img src="https://github.com/risangbaskoro.png?size=50" alt="Logo" draggable="false">
    </a>

    <nav class="flex space-x-4 justify-center items-center">
        @foreach($page->navigations as $nav)
            <a href="{{ $page->baseUrl . $nav->link }}"
               class="px-4 py-2 hover:bg-stone-700 transition duration-300 ease-in-out rounded-lg hover:shadow !shadow-stone-600"
            >
                {{ $nav->title }}
            </a>
        @endforeach
    </nav>
</div>