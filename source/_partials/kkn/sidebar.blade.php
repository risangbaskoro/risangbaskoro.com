<div class="mx-auto max-w-md hidden md:block">
    <ul>
        @foreach($kkn as $note)
            <li>
                <a href="{{ $note->getUrl() }}">{{ $note->title }}</a>
            </li>
        @endforeach
    </ul>
</div>