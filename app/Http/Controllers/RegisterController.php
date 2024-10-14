<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $request->request->add(['username' => Str::slug($request->username)]);

        $request->validate([
            'name' => 'required|max:20',
            'username' => 'required|unique:users|min:3|max:20',
            'email' => 'required|unique:users|email|max:50',
            'password' => 'required|confirmed'
        ]);

        User::create([
            'name' =>  $request->name,
            'username' => $request->username,
            'email' =>  $request->email,
            'password' =>  Hash::make( $request->password )
        ]);
    }
}
