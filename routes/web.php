<?php

use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\ImagenController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::middleware('auth')->group(function(){
    Route::get('/posts/create', [PostController::class, 'create']) ->name('post.create');
    Route::post('/posts', [PostController::class, 'store']) ->name('post.store');
    Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('post.destroy');

    Route::post('/{user:username}/posts/{post}', [ComentarioController::class, 'store']) ->name('comentario.store');
});

Route::get('/{user:username}', [PostController::class, 'index']) ->name('post.index');
Route::get('/{user:username}/posts/{post}', [PostController::class, 'show']) ->name('post.show');

Route::post('/imagenes', [ImagenController::class, 'store'])->name('img.store')->middleware('auth');