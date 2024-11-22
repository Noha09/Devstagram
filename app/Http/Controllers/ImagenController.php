<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class ImagenController extends Controller
{
    public function store(Request $request)
    {
        $manager = new ImageManager(new Driver());

        $img = $request->file('file');

        $nombreImg = Str::uuid() . "." . $img->extension();

        $imgServe = $manager->read($img);
        $imgServe->cover(1000,1000);

        $imgPath = public_path('uploads') . '/' . $nombreImg;
        $imgServe->save($imgPath);

        return response()->json(['imagen' => $nombreImg ]);
    }
}
