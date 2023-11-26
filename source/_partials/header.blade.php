<div class="p-6 flex justify-between items-center w-full">
    <a href="/">
        <img src="https://github.com/risangbaskoro.png?size=50" alt="Logo" draggable="false">
    </a>

    <nav class="flex space-x-4 justify-center items-center">
        @foreach($page->navigations as $nav)
            <a href="{{ $nav->link }}" class="hover:underline">{{ $nav->title }}</a>
        @endforeach
    </nav>
</div>