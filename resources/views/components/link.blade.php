@props(['target'=>null])

<a {{ $attributes->merge(['class' => '']) }} @if($target=="_blank") target="_blank" @else wire:navigate @endif >
    {{ $slot }}
</a>