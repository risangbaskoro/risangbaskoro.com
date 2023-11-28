@php
    $text = $text ?? 'Click me';
    $link = $link ?? '#';

    $color = $color ?? 'primary';
    $idleColor = match ($color) {
        'white' => 'text-stone-100 border-stone-100 hover:text-white hover:border-white',
        'secondary' => 'text-stone-400 border-stone-400 hover:text-stone-500 hover:border-stone-500',
        default => 'text-primary-400 border-primary-400 hover:text-primary-500 hover:border-primary-500',
    };
@endphp

<a href="{{ $link }}"
   class="{{ $idleColor }} block not-prose transition duration-300 rounded-xl border border-primary-400 px-6 py-4 my-8 text-sm md:text-base w-fit font-bold uppercase tracking-widest"
>
    {{ $text }} &rarr;
</a>