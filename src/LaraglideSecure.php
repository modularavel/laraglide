<?php

namespace Casimirorocha\Laraglide;

use Illuminate\Support\Facades\Storage;
use League\Glide\Urls\UrlBuilderFactory;
use URL;

class LaraglideSecure
{
    public function url(string $path, ?array $params = []): string
    {
        // return Storage::disk('public')->url($path);

        // Create an instance of the URL builder
        $urlBuilder = UrlBuilderFactory::create('img', config('laraglide.secure_key'));

        // Generate a URL
        return URL::to($urlBuilder->getUrl($path, $params));
    }
}
