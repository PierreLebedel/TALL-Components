<x-app-layout>

    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot> --}}

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            <x-demo.render-source component="input" />

            <x-demo.render-example example="forms/example-input-text" />

            <x-demo.render-example example="forms/example-input-text-disabled" />

            <x-demo.render-source component="label" />

            <x-demo.render-example example="forms/example-input-text-label" />

            <x-demo.render-source component="input-error" />

            <x-demo.render-example example="forms/example-input-text-error" />

            <x-demo.render-source component="input-number" />

            <x-demo.render-example example="forms/example-input-number-integer" />

            <x-demo.render-example example="forms/example-input-number-float" />

            <x-demo.render-example example="forms/example-input-number-float-disabled" />

        </div>
    </div>

</x-app-layout>
