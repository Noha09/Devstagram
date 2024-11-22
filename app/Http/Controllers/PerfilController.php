<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class PerfilController extends Controller
{
    public function index()
    {
        return view('perfil.index');
    }

    public function store(Request $request)
    {
        $request->request->add(['username' => Str::slug($request->username)]);

        $this->validate($request, [
            'username' => ['required', 'unique:users,username,' . Auth::user()->id, 'min:3', 'max:20', 'not_in:twitter,editar-perfil']
        ]);

        if ($request->img) {
            $manager = new ImageManager(new Driver());

            $img = $request->file('img');

            $nombreImg = Str::uuid() . "." . $img->extension();

            $imgServe = $manager->read($img);
            $imgServe->cover(1000, 1000);

            $imgPath = public_path('perfiles') . '/' . $nombreImg;
            $imgServe->save($imgPath);
        }

        $usuario = User::find(Auth::user()->id);
        $usuario->username = $request->username;
        $usuario->imagen = $nombreImg ?? Auth::user()->imagen ?? null;
        $usuario->save();

        return redirect()->route('post.index', $usuario->username);
    }
}
