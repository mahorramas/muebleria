@props(['active'])

@php
    $classes = ($active ?? false)
        ? 'bg-blue-100 text-blue-700'
        : '';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>