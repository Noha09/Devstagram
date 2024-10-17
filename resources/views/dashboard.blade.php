@extends('layouts.app')

@section('titulo')
    Perfil: {{ $user->name }}
@endsection

@section('contenido')
    <div class="flex justify-center">
        <div class="w-full md:w-8/12 lg:w-6/12 flex flex-col items-center md:flex-row">
            <div class="w-8/12 lg:w-6/12 px-5">
                <img src="{{ asset('img/usuario.svg') }}" alt="Imagen Usuario">
            </div>

            <div class="md:w-8/12 lg:w-6/12 px-5 flex flex-col items-center md:justify-center md:items-start py-10 md:py-0">
                <p class="text-gray-700 text-2xl">{{ $user->username }}</p>

                <p class="text-gray-800 text-sm mb-3 font-bold mt-5">
                    0
                    <span class="font-normal"> Seguidores</span>
                </p>

                <p class="text-gray-800 text-sm mb-3 font-bold">
                    0
                    <span class="font-normal"> Siguiendo</span>
                </p>

                <p class="text-gray-800 text-sm mb-3 font-bold">
                    {{ $posts->count() }}
                    <span class="font-normal"> Post</span>
                </p>
            </div>
        </div>
    </div>

    <section class="container mx-auto mt-10">
        <h1 class="font-black text-center text-4xl my-10">Publicaciones</h1>

        @if ($posts->count())
            <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                @foreach ($posts as $post)
                    <div>
                        <a href="{{ route('post.show', ['post' => $post, 'user' => $user]) }}">
                            <img src="{{ asset('uploads') . '/' . $post->imagen }}" alt="Imagen del Post {{ $post->titulo }}">
                        </a>
                    </div>
                @endforeach
            </div>

            <div class="my-10">
                {{ $posts->links('pagination::tailwind') }}
            </div>
        @else
            <p class="text-gray-600 uppercase text-center text-sm font-bold">Sin Publicaciones</p>
        @endif
    </section>
@endsection