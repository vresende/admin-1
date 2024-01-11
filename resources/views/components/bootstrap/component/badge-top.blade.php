@props(['bgcolor' => 'bg-danger'])
<span {{ $attributes->merge(['class'=> "position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger {$bgcolor}"]) }} >
    {{ $slot }}
</span>
