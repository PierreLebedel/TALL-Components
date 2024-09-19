@props(['language'=>'blade'])

<div {{ $attributes->merge(['class' => '']) }}>
    <pre><code class="language-{{ $language }}">{{ $slot }}</code></pre>
</div>