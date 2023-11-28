@php
    $color = $color ?? 'primary';

    $color = match ($color) {
        'white' => 'text-white',
        'secondary' => 'text-stone-400',
        default => 'text-primary-400',
    };
@endphp

<svg class="special-underline-svg {{ $color }} -mt-0.5 z-10"
     viewBox="0 0 142 22"
     fill="none"
     xmlns="http://www.w3.org/2000/svg"
>
    <path d="M1 21C50.0909 -0.531473 117.364 -2.18774 141 4.43732M21 21C41 11.0624 93.7273 1.92339 139.182 9.40613"
          stroke="currentColor" stroke-linecap="round"
    />
</svg>

<script>
    const specialUnderlineSpans = document.querySelectorAll('.special-underline');

    const specialUnderline = document.querySelector('.special-underline-svg');

    specialUnderlineSpans.forEach((span) => {
        span.appendChild(specialUnderline.cloneNode(true));
    });

    specialUnderline.remove();
</script>
