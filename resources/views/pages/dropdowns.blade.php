<x-app-layout>

    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot> --}}

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            <x-demo.render-source component="dropdown" />
            
            <x-demo.render-source component="dropdown-link" />

            <x-demo.render-example example="dropdowns/example-dropdown" />

            
        </div>
    </div>

</x-app-layout>
