<?php

namespace Casimirorocha\Laraglide;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Storage;
use League\Glide\Responses\SymfonyResponseFactory;
use League\Glide\ServerFactory;
use Symfony\Component\HttpFoundation\StreamedResponse;

class Laraglide implements ShouldQueue
{
    public function __invoke($path)
    {
        $app = app('request');

        $config = config('laraglide');

        $cacheDriver = Storage::disk(config('laraglide.cache_driver'))->getDriver();

        $sourceDriver = Storage::disk(config('laraglide.source_driver'))->getDriver();

        $server = ServerFactory::create([
            'driver' => 'gd',
            'response' => new SymfonyResponseFactory($app),
            'source' => $sourceDriver,
            'cache' => $cacheDriver,
            'watermarks' => $config['watermarks_path'],
            'cache_path_prefix' => $config['cache_path_prefix'],
            'base_url' => $config['base_url'],
            'max_image_size' => $config['max_image_size'],
            'group_cache_in_folders' => $config['group_cache_in_folders'],
        ]);

        $server->outputImage($path, request()->except(['expires', 'signature']));
    }
}
