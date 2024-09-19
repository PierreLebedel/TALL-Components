@props(['example'])

@php
    ob_start();
    include(resource_path('views/components/demo/'.$example.'.blade.php'));
    $var = ob_get_contents(); 
    ob_end_clean();
@endphp

<div {{ $attributes->merge(['class' => 'mb-6']) }}>

    {!! $slot !!}

    <div class="md:grid md:grid-cols-2 gap-6">
        <div class="px-4 sm:px-0">
            @include('components/demo/'.$example)
        </div>
        <div>
            <pre><code class="language-blade">{{ $var }}</code></pre>
        </div>
    </div>

</div>

