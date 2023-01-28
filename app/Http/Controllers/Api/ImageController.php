<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function convert_image(Request $request)
    {
        $image = $request->image;
        $image = str_replace('data:image/png;base64,', '', $image);
        $image = str_replace(' ', '+', $image);
        $imageName = str_random(10) . '.' . 'png';
        \File::put(public_path() . '/images/' . $imageName, base64_decode($image));
        return response()->json(['success' => 'You have successfully upload image.']);
    }
}
