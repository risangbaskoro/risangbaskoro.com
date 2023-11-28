@php
    $color = $color ?? 'primary';

    $color = match ($color) {
        'white' => 'text-white',
        'secondary' => 'text-stone-400',
        default => 'text-primary-400',
    };
@endphp

<svg class="{{ $color }} transition opacity-0 group-hover:animated-special-underline group-hover:opacity-100 -mt-0.5 z-10 stroke-[4px]"
     viewBox="0 0 142 22"
     fill="none"
     xmlns="http://www.w3.org/2000/svg"
>
    <path d="M1 21C50.0909 -0.531473 117.364 -2.18774 141 4.43732M21 21C41 11.0624 93.7273 1.92339 139.182 9.40613"
          stroke="currentColor" stroke-linecap="round"
    />
</svg>
