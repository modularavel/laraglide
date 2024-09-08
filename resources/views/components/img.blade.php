@props([
    'src',
    'alt',
    ...config('laraglide.img_params')
])

<img wire:key="{{ $src }}"
     {{ $attributes->merge(['class' => 'w-100']) }}
     src="{{ config('laraglide.base_url') }}/{{ $src }}?fit={{ $fit }}&w={{ $width }}&h={{ $height }}&dpr={{ $ratio }}&pixel={{ $pixel }}&blur={{ $blur }}&border={{ $borderSize }},{{ $borderColor }},{{ $borderType }}&q={{ $quality }}&gam={{ $gama }}&fm={{ $encodeFormat }}&con={{ $contrast }}&bri={{ $brightness }}&sharp={{ $sharp }}"
     alt="{{ $alt }}"
/>
