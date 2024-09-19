@props(['type'=>'submit', 'href'=>null])

<x-button :type="$type" :href="$href" {{ $attributes->merge(['class'=>'!bg-rose-500 !hover:bg-rose-600 !text-white']) }}>
    {!! $slot !!}
</x-button>