<a class="group/nav-link px-4 py-2 max-w-fit overflow-hidden" href="{{ $page->baseUrl . $nav->link }}"
        @class([
             "pointer-events-none" => $page->getUrl() === $page->baseUrl . $nav->link,
         ])
>
    <div>
        {{ $nav->title }}
    </div>

    @include('_partials.nav-link-underline')
</a>