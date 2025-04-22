@php
    $classes = "mt-2 mb-10 text-pretty text-center text-4xl font-semibold tracking-tight sm:text-5xl text-gold";
@endphp

<h2 {{ $attributes(['class' => $classes]) }}>
  {{ $slot }}
</h2>