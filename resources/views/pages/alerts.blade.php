<x-app-layout>

    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Alerts') }}
        </h2>
    </x-slot> --}}

    <div class="py-6">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            <x-demo.render-source component="alert" />

            <x-demo.render-example example="alerts/example-01">
                <x-slot:title></x-slot:title>
                <x-slot:description></x-slot:description>
            </x-demo.render-example>

            <x-demo.render-example example="alerts/example-02">
                <x-slot:title></x-slot:title>
                <x-slot:description></x-slot:description>
            </x-demo.render-example>

            <x-demo.render-example example="alerts/example-03">
                <x-slot:title></x-slot:title>
                <x-slot:description></x-slot:description>
            </x-demo.render-example>

            <x-demo.render-example example="alerts/example-04">
                <x-slot:title></x-slot:title>
                <x-slot:description></x-slot:description>
            </x-demo.render-example>

            <x-demo.render-example example="alerts/example-05">
                <x-slot:title></x-slot:title>
                <x-slot:description></x-slot:description>
            </x-demo.render-example>

            <x-demo.render-example example="alerts/example-06">
                <x-slot:title></x-slot:title>
                <x-slot:description></x-slot:description>
            </x-demo.render-example>

            <x-demo.render-example example="alerts/example-07">
                <x-slot:title></x-slot:title>
                <x-slot:description></x-slot:description>
            </x-demo.render-example>

            <x-demo.render-example example="alerts/example-08">
                <x-slot:title></x-slot:title>
                <x-slot:description></x-slot:description>
            </x-demo.render-example>

            <x-demo.render-example example="alerts/example-09">
                <x-slot:title></x-slot:title>
                <x-slot:description></x-slot:description>
            </x-demo.render-example>

            <x-demo.render-example example="alerts/example-10">
                <x-slot:title></x-slot:title>
                <x-slot:description></x-slot:description>
            </x-demo.render-example>
            
        </div>
    </div>
</x-app-layout>
