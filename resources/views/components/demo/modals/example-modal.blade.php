<div>
    <x-button-primary x-data="" x-on:click.prevent="$dispatch('open-modal', 'example_modal_01')">{{ __('Open modal') }}</x-button-primary>

    <x-modal name="example_modal_01" :show="$errors->isNotEmpty()" focusable>
        <div class="p-6 text-gray-500 flex items-center justify-between">
            <div>Content goes here.</div>
            <x-button x-on:click="$dispatch('close')">Close</x-button>
        </div>
    </x-modal>
</div>