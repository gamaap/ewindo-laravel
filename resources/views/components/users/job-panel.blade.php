@props(['location'])

@php
    $classes =
        'p-4 bg-background rounded-xl border border-transparent hover:border-yellow-500 group transition-colors duration-300';
@endphp

<div {{ $attributes(['class' => $classes]) }}>
    {{ $slot }}
</div>
