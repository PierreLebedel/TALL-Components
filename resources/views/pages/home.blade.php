<x-app-layout>

    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot> --}}

    <div class="py-6">

        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="pt-20 text-center">
                <h1 class="text-5xl font-black">{{ __("A collection of reusable Blade components, made with Tailwind CSS, Livewire and Alpine.js") }}</h1>

                <div class="flex items-center justify-center gap-3 mt-20">
                    <x-button-primary size="lg" href="{{ route('forms') }}">{{ __("See forms components") }}</x-button-primary>
                    <x-button href="{{ route('modals') }}" size="lg">{{ __("Maybe modals") }}</x-button>
                </div>
            </div>
        </div>

    </div>

</x-app-layout>
