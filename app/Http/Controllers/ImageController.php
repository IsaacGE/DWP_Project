<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;

class ImageController extends Controller
{
    public function store(Request $_request)
    {
        $image = $_request->file('file');
        $imageName = Str::uuid() . "." . $image->extension();
        $imageServer = Image::make($image);
        $imageServer->fit(500, 500);
        $imagePath = public_path('uploads') . "/" . $imageName;
        $imageServer->save($imagePath);
        return response()->json(['image' => "$imageName"]);
    }
}