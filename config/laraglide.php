<?php

// config for Casimirorocha/Laraglide
return [

    'secure_key' => env('LARAGLIDE_SECURE_KEY', 'v-LK4WCdhcfcc%jt*VC2cj%nVpu+xQKvLUA%H86kRVk_4bgG8&CWM#k*b_7MUJpmTc=4GFmKFp7=K%67je-skxC5vz+r#xT?62tT?Aw%FtQ4Y3gvnwHTwqhxUh89wCa_'),

    'base_url' => env('LARAGLIDE_BASE_URL', 'img'),

    'secure_base_url' => env('LARAGLIDE_SECURE_BASE_URL', 'secure-image'),

    'max_image_size' => env('LARAGLIDE_MAX_IMAGE_SIZE', 1024 * 1024),

    /*
    |--------------------------------------------------------------------------
    | Image driver
    |--------------------------------------------------------------------------
    |
    | By default Glide uses the GD library.
    | However, you can also use Glide with ImageMagic if
    | The Imagick PHP extension is installed.
    |
    | Supported drivers: "gd", "imagik"
    |
    */
    'driver' => env('LARAGLIDE_DRIVER', 'gd'),

    'source_driver' => env('LARAGLIDE_SOURCE_DRIVER', 'local'),

    'cache_driver' => env('LARAGLIDE_CACHE_DRIVER', 'local'),

    'cache_path_prefix' => env('LARAGLIDE_CACHE_PATH_PREFIX', '.cache'),

    'group_cache_in_folders' => env('LARAGLIDE_GROUP_CACHE_IN_FOLDERS', true),

    'watermarks_path' => public_path('watermarks/'),

    'img_params' => [
        /*
        |--------------------------------------------------------------------------
        | Orientation (or)
        |--------------------------------------------------------------------------
        |
        | Rotates the image. Accepts auto, 0, 90, 180 or 270. Default is auto.
        | The auto option uses Exif data to automatically orient images correctly.
        |
        | <img src="kayaks.jpg?h=500&or=90">
        |
        */
        'or' => env('LARAGLIDE_IMG_OR', 90),

        /*
        |--------------------------------------------------------------------------
        | Orientation (or)
        |--------------------------------------------------------------------------
        |
        | You can also set where the image is cropped by adding a crop position.
        | Accepts crop-top-left, crop-top, crop-top-right, crop-left, crop-center,
        | crop-right, crop-bottom-left, crop-bottom or crop-bottom-right.
        |
        | Default is crop-center, and is the same as crop.
        |
        | <img src="kayaks.jpg?w=300&h=300&fit=crop-left">
        |
        | In addition to the crop position, you can be more specific about the exact
        | crop position using a focal point. This is defined using two offset
        |  percentages: crop-x%-y%.
        |
        |  <img src="kayaks.jpg?w=300&h=300&fit=crop-25-75">
        |
        */
        'fit' => env('LARAGLIDE_IMG_FIT', 'crop'),

        // Flips the image. Accepts v, h and both. <img src="kayaks.jpg?h=500&flip=v">
        'flip' => env('LARAGLIDE_IMG_FLIP', ''),

        'width' => env('LARAGLIDE_IMG_WIDTH', 400),

        'height' => env('LARAGLIDE_IMG_HEIGHT', 600),

        'ratio' => env('LARAGLIDE_IMG_RATIO', 0.5),

        /*
        | The device pixel ratio is used to easily convert between CSS pixels
        | and device pixels. This makes it possible to display images at the
        | correct pixel density on a variety of devices such as Apple devices
        | with Retina Displays and Android devices.
        | You must specify either a width, a height, or both for this
        | parameter to work. The default is 1.
        | The maximum value that can be set for dpr is 8.
        |
        | <img src="kayaks.jpg?w=250&dpr=2">
        |
        */
        'pixel' => env('LARAGLIDE_IMG_PIXEL', 0),

        'blur' => env('LARAGLIDE_IMG_BLUR', 0),

        'borderSize' => env('LARAGLIDE_IMG_BORDER_SIZE', 7),

        'borderColor' => env('LARAGLIDE_IMG_BORDER_COLOR', 'FFCC33'),

        /*
        |--------------------------------------------------------------------------
        | Border
        |--------------------------------------------------------------------------
        |
        | Add a border to the image. Required format: width,color,method.
        | Default is crop-center, and is the same as crop.
        |
        | <img src="kayaks.jpg?w=500&border=10,5000,overlay">
        |
        | Sets how the border will be displayed. Available options:
        |
        | (overlay):  Place border on top of image (default)
        | (shrink):   Shrink image within border (canvas does not change).
        | (expand):   Expands canvas to accommodate border.
        |
        |  <img src="kayaks.jpg?w=500&border=10,FFCC33,expand">
        |
        */
        'borderType' => env('LARAGLIDE_IMG_BORDER_TYPE', 'expand'),

        'quality' => env('LARAGLIDE_IMG_QUALITY', 80), // Integer: 0 - 100

        /*
        |--------------------------------------------------------------------------
        | Gamma (gam)
        |--------------------------------------------------------------------------
        |
        | Adjusts the image gamma. Use values between 0.1 and 9.99.
        |
        | <img src="kayaks.jpg?w=500&gam=1.5">
        |
        */
        'gama' => 0.8,

        /*
        |--------------------------------------------------------------------------
        | Format (fm)
        |--------------------------------------------------------------------------
        |
        | Encodes the image to a specific format. Accepts jpg, pjpg (progressive jpeg)
        | png, gif, webp or avif. Defaults to jpg.
        |
        | <img src="kayaks.jpg?w=500&fm=webp">
        |
        */
        'encodeFormat' => 'webp',

        /*
        |--------------------------------------------------------------------------
        | Contrast (con)
        |--------------------------------------------------------------------------
        |
        | Adjusts the image contrast. Use values between -100 and +100,
        | where 0 represents no change.
        |
        */
        'contrast' => 5,

        /*
        |--------------------------------------------------------------------------
        | Brightness (bri)
        |--------------------------------------------------------------------------
        |
        | Adjusts the image brightness. Use values between -100 and +100,
        | where 0 represents no change.
        |
        */
        'brightness' => -2,

        /*
        |--------------------------------------------------------------------------
        | Background (bg)
        |--------------------------------------------------------------------------
        |
        | Sets the background color of the image. See colors for more information
        | on the available color formats.
        |
        | <img src="logo.png?w=400&bg=black">
        |
        */
        'bg' => 'black',

        /*
        |--------------------------------------------------------------------------
        | Sharpen (sharp)
        |--------------------------------------------------------------------------
        |
        | Sharpen the image. Use values between 0 and 100.
        |
        | <img src="kayaks.jpg?w=500&sharp=15">
        |
        */
        'sharp' => 15,

        /*
        |--------------------------------------------------------------------------
        | Loading (lazy)
        |--------------------------------------------------------------------------
        */
        'loading' => 'lazy',
    ],

    /*
    |--------------------------------------------------------------------------
    | Image driver
    |--------------------------------------------------------------------------
    |
    | In certain situations you may want to define default image manipulations.
    | For example, maybe you want to specify that all images are outputted
    | as JPEGs (fm=jpg). Or maybe you have a watermark that you want added to
    | all images. Glide makes this possible using default manipulations.
    |
    */
    'defaults' => [
        'mark' => 'logo.png',

        'markw' => '30w', // Sets the width of the watermark in pixels, or using relative dimensions.

        'markh' => '200', // Sets the height of the watermark in pixels, or using relative dimensions.

        'markpad' => '5w', /* Padding, sets how far the watermark is away from the edges of the image.
                            | Basically a shortcut for using both markx and marky.
                            | Set in pixels, or using relative dimensions.
                            | Ignored if markpos is set to center.
                            */
    ],

    /*
    |--------------------------------------------------------------------------
    | Presets
    |--------------------------------------------------------------------------
    |
    | Glide also makes it possible to define groups of defaults, known as
    | presets! This is helpful if you have standard image manipulations
    | that you use throughout your app.
    |
    | Using presets: "To use a presets, set it using the p parameter:"
    | <img src="avatar.jpg?p=small">
    |
    | It’s also possible to use multiple presets together:
    | <img src="avatar.jpg?p=small,watermarked">
    |
    | It’s even possible to use presets with additional parameters:
    | <img src="avatar.jpg?p=small,watermarked&filt=sepia">
    */
    'presets' => [
        'small' => [
            'w' => 200,
            'h' => 200,
            'fit' => 'crop',
        ],
        'medium' => [
            'w' => 600,
            'h' => 400,
            'fit' => 'crop',
        ],
    ],
];
