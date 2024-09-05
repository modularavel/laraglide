<?php

use Casimirorocha\Laraglide\Laraglide;
use Illuminate\Support\Facades\Route;
use League\Glide\Urls\UrlBuilderFactory;

Route::get('/img/{path}', Laraglide::class)->where('path', '.*');

Route::get('/secure-image/{path}', function ($path) {

    // Set complicated sign key
    $signkey = 'v-LK4WCdhcfcc%jt*VC2cj%nVpu+xQKvLUA%H86kRVk_4bgG8&CWM#k*b_7MUJpmTc=4GFmKFp7=K%67je-skxC5vz+r#xT?62tT?Aw%FtQ4Y3gvnwHTwqhxUh89wCa_';

    // Create an instance of the URL builder
    $urlBuilder = UrlBuilderFactory::create('/img/', $signkey);

    // Generate a URL
    return $urlBuilder->getUrl($path, [
        'w' => 500
    ]);
})->where('path', '.*')->name('secure.image');
