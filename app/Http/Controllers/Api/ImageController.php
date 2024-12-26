<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class ImageController extends Controller
{
    public function convert_image(Request $request)
    {
        $image = $request->image;
        $image = str_replace('data:image/png;base64,', '', $image);
        $image = str_replace(' ', '+', $image);
        $imageName = Str::random(10).'.'.'png';
        File::put(public_path().'/images/'.$imageName, base64_decode($image));

        return response()->json(['success' => 'You have successfully upload image.']);
    }
}
