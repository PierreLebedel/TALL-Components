<div>
    <x-button-primary x-data="" x-on:click.prevent="$dispatch('open-modal', 'example_modal_02')">{{ __('Open small modal') }}</x-button-primary>

    <x-modal name="example_modal_02" :show="$errors->isNotEmpty()" focusable maxWidth="sm">
        <div class="p-6 text-gray-500 flex items-center justify-between">
            <div>Content goes here.</div>
            <x-button x-on:click="$dispatch('close')">Close</x-button>
        </div>
    </x-modal>
</div>