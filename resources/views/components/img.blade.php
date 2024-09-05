@props([
    'src',
    'alt',
    ...config('laraglide.img_params')
])

<figure>
    <img key="img-{{ $src }}"
         src="{{ config('laraglide.base_url') }}/{{ $src }}?fit={{ $fit }}&w={{ $width }}&h={{ $height }}&dpr={{ $ratio }}&pixel={{ $pixel }}&blur={{ $blur }}&border={{ $borderSize }},{{ $borderColor }},{{ $borderType }}&q={{ $quality }}&gam={{ $gama }}&fm={{ $encodeFormat }}&con={{ $contrast }}&bri={{ $brightness }}&sharp={{ $sharp }}"
         width="100%"
         alt="{{ $alt }}"
    />
</figure>
