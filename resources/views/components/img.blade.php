@props([
    'src',
    'alt',
    'secureUrl' => true,
    'simple' => false,
    'sourceDrive' => null,
    'cacheDrive' => null,
    ...config('laraglide.img_params')
])

@php
    config()->set('laraglide.source_drive', $sourceDrive);

    config()->set('laraglide.cache_drive', $cacheDrive);

    $config = config('laraglide');

    $baseUrl = $secureUrl ? '' : $config['base_url'];

    $otherParamsArr = [
        'fit' => $fit,
        'dpr' => $ratio,
        'pixel' => $pixel,
        'blur' => $blur,
        'border' => $borderSize.",".$borderColor.",".$borderType,
        'fm' => 'webp',
        'q' => $quality,
        'gam' => $gama,
        'con' => $contrast,
        'bri' => $brightness,
        'sharp' => $sharp
    ];

    $otherParams = "&dpr=$ratio&pixel=$pixel&blur=$blur&border=$borderSize,$borderColor,$borderType&fm=webp&q=$quality&gam=$gama&con=$contrast&bri=$brightness&sharp=$sharp";
    /// $otherParams = $config['img_params']
@endphp

@if($simple)
    <img {{ $attributes->merge(['class' => 'w-100']) }}
         key="simple-img-{{ $src }}"
         src="{{ LaraglideSecure::url("$baseUrl/$src", [
            'w' => $width ?? 200,
            'h' => $height ?? 200,
            ...$otherParamsArr
        ]) }}"
         alt="{{ $alt }}"
    />
@else
    <picture key="picture-{{ $src }}" {{ $attributes->merge(['class' => 'w-100 min-h-[520px]']) }}>
        <source media="(max-width:320px)"
                data-srcset="{{ LaraglideSecure::url("$baseUrl/$src", [
                    'w' => 200,
                    'h' => 250,
                    ...$otherParamsArr
                ]) }} 320w"
        >

        <source media="(max-width:375px)"
                data-srcset="{{ LaraglideSecure::url("$baseUrl/$src", [
                    'w' => 280,
                    'h' => 330,
                    ...$otherParamsArr
                ]) }} 375w"
        >

        <source media="(max-width:425px)"
                data-srcset="{{ LaraglideSecure::url("$baseUrl/$src", [
                    'w' => 300,
                    'h' => 350,
                    ...$otherParamsArr
                ]) }} 425w"
        >

        <source media="(max-width:768px)"
                data-srcset="{{ LaraglideSecure::url("$baseUrl/$src", [
                    'w' => 300,
                    'h' => 370,
                    ...$otherParamsArr
                ]) }} 768w"
        >

        <source media="(min-width:1024px)"
                data-srcset="{{ LaraglideSecure::url("$baseUrl/$src", [
                    'w' => 300,
                    'h' => 400,
                    ...$otherParamsArr
                ]) }} 1024w"
        >

        {{--<img class="card-image-user lazyload blur-up w-100"
             key="img-{{ $src }}"
             src="{{ LaraglideSecure::url("$baseUrl/$src", [
                'w' => 300,
                'h' => 400,
                ...$otherParamsArr
            ]) }}"
             alt="{{ $alt }}"
        />--}}

        <img class="card-image-user lazyload blur-up w-100 h-[400px]"
             key="img-{{ $src }}"
             src="{{ asset('loading.gif') }}"
             data-src="{{ LaraglideSecure::url("$baseUrl/$src", [
                'w' => 300,
                'h' => 400,
                ...$otherParamsArr
            ]) }}"
             alt="{{ $alt }}"
        />
    </picture>
@endif

@pushonce('scripts')
    <script src="https://afarkas.github.io/lazysizes/lazysizes.min.js"></script>
@endpushonce
