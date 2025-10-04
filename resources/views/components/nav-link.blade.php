@props(['primary', 'type' => 'link', 'active' => false])

@php
$baseButtonClasses = 'px-4 py-2 text-sm font-bold cursor-pointer rounded-lg transition-colors';
$primaryButtonClasses = 'bg-primary text-white hover:bg-primary/90';
$secondaryButtonClasses = 'bg-primary/10 dark:bg-primary/20 text-primary hover:bg-primary/20 dark:hover:bg-primary/30';
$linkClasses = 'text-gray-600 hover:text-gray-900 rounded-lg transition-colors transition-background-color hover:bg-gray-200 px-3 py-2';

$classes = ($type == 'button')
    ? $baseButtonClasses . ' ' . ($primary ? $primaryButtonClasses : $secondaryButtonClasses)
    : $linkClasses;
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
