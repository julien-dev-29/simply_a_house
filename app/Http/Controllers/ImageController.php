<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use League\Glide\Responses\LaravelResponseFactory;
use League\Glide\ServerFactory;
use Storage;

class ImageController extends Controller
{
    public function show(Request $request, string $path)
    {
        $server = ServerFactory::create([
            'response' => new LaravelResponseFactory($request),
            'source' => Storage::disk('public')->getDriver(),
            'cache' => Storage::disk('local')->getDriver(),
            'cache_path_prefix' => '.cache',
            'base_url' => 'images'
        ]);
        return $server->getImageResponse($path, $request->all());
    }
}
