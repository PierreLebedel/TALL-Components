<x-dropdown align="left" width="w-auto">
    <x-slot name="triggerText">
        Open dropdown
    </x-slot>

    <x-slot name="content">
        <x-dropdown-link href="#">
            {{ __('Link 1') }}
        </x-dropdown-link>
        <x-dropdown-link href="#">
            {{ __('Link 2') }}
        </x-dropdown-link>
    </x-slot>
</x-dropdown>