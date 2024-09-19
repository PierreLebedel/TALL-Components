@props(['component'])

@php
    ob_start();
    include(resource_path('views/components/'.$component.'.blade.php'));
    $var = trim(ob_get_contents()); 
    ob_end_clean();
@endphp

<div x-data="{ isExpanded: false }" class="rounded-md overflow-hidden mx-4 sm:mx-0 border border-gray-200 border-l-4 border-l-indigo-500">
    <button type="button" class="flex w-full items-center justify-between gap-6 bg-white p-4 rounded-top-md" @click="isExpanded = ! isExpanded">
        <div class="text-lg text-gray-500">
            components/<b class="text-gray-800">{{ $component }}.blade.php</b>
        </div>
        <div class="flex items-center justify-end text-gray-500 text-sm">
            <span class="me-2" x-text="isExpanded  ?  'Hide source'  :  'Show source'">Show source</span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke="currentColor" class="size-5 shrink-0 transition" aria-hidden="true" :class="isExpanded  ?  'rotate-180'  :  ''">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                </svg>
        </div>
        
    </button>
    <div x-cloak x-show="isExpanded" role="region" x-collapse>
        <x-demo.render-code language="blade">{{ $var }}</x-demo.render-code>
    </div>
</div>