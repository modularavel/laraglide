<?php

use Casimirorocha\Laraglide\Laraglide;
use Illuminate\Support\Facades\Route;
use League\Glide\Urls\UrlBuilderFactory;

Route::get('/img/{path}', Laraglide::class)->where('path', '.*');

Route::get('/secure-image/{path}', function ($path) {

    // Set complicated sign key
    $signkey = config('laraglide.secure_key');

    // Create an instance of the URL builder
    $urlBuilder = UrlBuilderFactory::create($signkey);

    // Generate a URL
    return $urlBuilder->getUrl($path);
})->where('path', '.*')->name('secure.image');
