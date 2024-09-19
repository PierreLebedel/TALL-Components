@props(['type'=>'button', 'tag'=>'button', 'href'=>null, 'size'=>'md'])

@php
if($href){
    $tag = 'link';
}

$classes = 'inline-flex items-center px-4 py-2.5 bg-white border border-gray-300 rounded-md font-semibold text-sm text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500 disabled:opacity-25 transition ease-in-out duration-150';

if($size=='lg'){
    $classes = 'inline-flex items-center px-6 py-3 bg-white border border-gray-300 rounded-md font-semibold text-xl text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500 disabled:opacity-25 transition ease-in-out duration-150';
}elseif($size=='sm'){
    $classes = 'inline-flex items-center px-3 py-1 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500 disabled:opacity-25 transition ease-in-out duration-150';
}
@endphp

@if($tag=='link')
<x-link href="{{ $href }}" {{ $attributes->merge(['class'=>$classes]) }}>
    {!! $slot !!}
</x-link>

@else
<button type="{{ $type }}" {{ $attributes->merge(['class'=>$classes]) }}>
    {!! $slot !!}
</button>
@endif