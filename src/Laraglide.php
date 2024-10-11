<?php

namespace Casimirorocha\Laraglide;

use Illuminate\Http\Request;
use League\Glide\ServerFactory;
use Illuminate\Support\Facades\Storage;
use League\Glide\Signatures\SignatureException;
use League\Glide\Signatures\SignatureFactory;
use League\Glide\Responses\SymfonyResponseFactory;
use Symfony\Component\HttpFoundation\StreamedResponse;

class Laraglide
{
    public function __invoke(Request $request, string $path): StreamedResponse
    {
        $config = config('laraglide');

        try {
            // Validate HTTP signature
            SignatureFactory::create($config['secure_key'])->validateRequest("/img/$path", $request->all());

            $server = ServerFactory::create([
                'response' => new SymfonyResponseFactory($request),
                'source' => Storage::disk($config['source_driver'])->getDriver(),
                'cache' => Storage::disk($config['cache_driver'])->getDriver(),
                'watermarks' => $config['watermarks_path'],
                'cache_path_prefix' => $config['cache_path_prefix'],
                'base_url' => $config['base_url'],
                'max_image_size' => $config['max_image_size'],
                'group_cache_in_folders' => $config['group_cache_in_folders'],
            ]);

            return $server->getImageResponse($path, $request->all());
        } catch (SignatureException|FileNotFoundException $e) {
            abort(403, $e->getMessage());
        }
    }
}
