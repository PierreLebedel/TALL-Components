@props(['value', 'required'=>false])

<label {{ $attributes->merge(['class' => 'block font-medium text-md text-gray-700 dark:text-gray-300 mb-1']) }}>
    {{ $value ?? $slot }}
    @if($required)
    <span class="text-rose-500" title="This field is required">*</span>
    @endif
</label>
