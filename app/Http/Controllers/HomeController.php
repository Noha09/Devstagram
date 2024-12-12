<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __invoke()
    {
        $ids = Auth::user()->followings->pluck('id')->toArray();
        $posts = Post::whereIn('user_id',$ids)->latest()->paginate(20);

        return view('home', [
            'posts' => $posts
        ]);
    }
}
