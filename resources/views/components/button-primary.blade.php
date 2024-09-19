@props(['type'=>'submit', 'href'=>null])

<x-button :type="$type" :href="$href" {{ $attributes->merge(['class'=>'!bg-indigo-500 !hover:bg-indigo-600 !text-white']) }}>
    {!! $slot !!}
</x-button>