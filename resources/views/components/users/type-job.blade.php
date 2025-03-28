@php
    $classes =
        'bg-gray-100 text-gray-700 rounded-full font-semibold px-4 py-1 text-xs tracking-wide uppercase hover:bg-gray-200 transition-colors duration-300 shadow-sm';
@endphp

<a href="#" class="{{ $classes }}">{{ $slot }}</a>
