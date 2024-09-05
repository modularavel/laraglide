<?php

namespace Casimirorocha\Laraglide;

use Illuminate\Support\Facades\Storage;
use League\Glide\Responses\SymfonyResponseFactory;
use League\Glide\ServerFactory;

class Laraglide
{
    public function __invoke($path): void
    {
        $server = ServerFactory::create([
            'driver' => 'gd',
            'response' => new SymfonyResponseFactory(app('request')),
            'source' => Storage::disk(config('laraglide.source_driver'))->getDriver(),
            'cache' => Storage::disk(config('laraglide.cache_driver'))->getDriver(),
            'watermarks' => config('laraglide.watermarks_path'),
            'cache_path_prefix' => config('laraglide.cache_path_prefix'),
            'base_url' => config('laraglide.base_url'),
            'max_image_size' => config('laraglide.max_image_size'),
            'group_cache_in_folders' => config('laraglide.group_cache_in_folders'),
        ]);

        $server->outputImage($path, request()->except(['expires', 'signature']));
    }
}
