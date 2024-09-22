@props([
    'src',
    'alt',
    'simple' => false,
    ...config('laraglide.img_params')
])

@php
    $config = config('laraglide.base_url');
    $otherParams = "&dpr=$ratio&pixel=$pixel&blur=$blur&border=$borderSize,$borderColor,$borderType&fm=webp&q=$quality&gam=$gama&con=$contrast&bri=$brightness&sharp=$sharp";
@endphp

@if($simple)
    <img {{ $attributes->merge(['class' => 'w-100']) }}
         wire:key="{{ $src }}"
         src="{{ $config }}/{{ $src }}?fit={{ $fit }}&w={{ $width }}&h={{ $height }}{{ $otherParams }}"
         alt="{{ $alt }}"
    />
@else
    <picture wire:key="{{ $src }}" {{ $attributes->merge(['class' => 'w-100']) }}>
        <source media="(max-width:320px)"
                data-srcset="{{ $config }}/{{ $src }}?fit={{ $fit }}&w=160&h=160{{ $otherParams }} 320w">

        <source media="(max-width:375px)"
                data-srcset="{{ $config }}/{{ $src }}?fit={{ $fit }}&w=280&h=280{{ $otherParams }} 375w">

        <source media="(max-width:425px)"
                data-srcset="{{ $config }}/{{ $src }}?fit={{ $fit }}&w=300&h=300{{ $otherParams }} 425w">

        <source media="(max-width:768px)"
                data-srcset="{{ $config }}/{{ $src }}?fit={{ $fit }}&w=370&h=370{{ $otherParams }} 768w">

        <source media="(min-width:1024px)"
                data-srcset="{{ $config }}/{{ $src }}?fit={{ $fit }}&w=300&h=430{{ $otherParams }} 1024w">

        <img class="lazyload blur-up w-100"
             wire:key="{{ $src }}"
             src="{{ asset('loading.gif') }}"
             data-src="{{ $config }}/{{ $src }}?fit={{ $fit }}&w=300&h=430{{ $otherParams }}"
             alt="{{ $alt }}"
             height="430px"
        />
    </picture>
@endif
