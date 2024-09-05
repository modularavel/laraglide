# This is my package laraglide

[![Latest Version on Packagist](https://img.shields.io/packagist/v/casimirorocha/laraglide.svg?style=flat-square)](https://packagist.org/packages/casimirorocha/laraglide)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/casimirorocha/laraglide/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/casimirorocha/laraglide/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/casimirorocha/laraglide/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/casimirorocha/laraglide/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/casimirorocha/laraglide.svg?style=flat-square)](https://packagist.org/packages/casimirorocha/laraglide)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us

[<img src="https://github.com/modularavel/laraglide/blob/develop/prints/print_01.png?t=1" width="419px" />](https://spatie.be/github-ad-click/laraglide)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require casimirorocha/laraglide
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laraglide-config"
```

This is the contents of the published config file:

```php
return [
'base_url' => env('LARAGLIDE_BASE_URL', 'img'),

    'max_image_size' => env('LARAGLIDE_MAX_IMAGE_SIZE', 1024 * 1024 * 2),

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

    'group_cache_in_folders' => env('LARAGLIDE_GROUP_CACHE_IN_FOLDERS', '.cache'),

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

        'quality' => env('LARAGLIDE_IMG_QUALITY', 90), // Integer: 0 - 100

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
        'gama' => 0.9,

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
        'contrast' => 3,

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
        'sharp' => 3,

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
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="laraglide-views"
```

## Usage

```php
$laraglide = new Casimirorocha\Laraglide();
echo $laraglide->echoPhrase('Hello, Casimirorocha!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Casimiro Rocha](https://github.com/casimirorocha)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
