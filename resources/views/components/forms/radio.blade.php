@props(['label', 'name', 'id'])

@php
  $classes = 'relative size-4 appearance-none rounded-full border border-gray-300 bg-white before:absolute before:inset-1 before:rounded-full before:bg-white not-checked:before:hidden checked:border-transparent checked:bg-indigo-600 focus:outline-none focus:ring-0 focus:ring-offset-0  disabled:border-gray-300 disabled:bg-gray-100 disabled:before:bg-gray-400 forced-colors:appearance-auto forced-colors:before:hidden';

  $defaults = [
    'type' => 'radio',
    'id' => $id,
    'name' => $name,
    'value' => old($name)
  ];
@endphp

<div class="flex items-center gap-x-3">
  <input {{ $attributes->merge($defaults) }} class="{{ $classes }}">
  <label for="{{ $id }}">{{ $label }}</label>
</div>