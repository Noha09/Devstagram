@extends('layouts.app')

@section('titulo')
    Perfil: {{ $user->name }}
@endsection

@section('contenido')
    <div class="flex justify-center">
        <div class="w-full md:w-8/12 lg:w-6/12 flex flex-col items-center md:flex-row">
            <div class="w-8/12 lg:w-6/12 px-5">
                <img src="{{ 
                    $user->imagen ? asset('perfiles') . '/' . $user->imagen : asset('img/usuario.svg') 
                }}" alt="Imagen Usuario">
            </div>

            <div class="md:w-8/12 lg:w-6/12 px-5 flex flex-col items-center md:justify-center md:items-start py-10 md:py-0">
                <div class="flex items-center gap-3">
                    <p class="text-gray-700 text-2xl">{{ $user->username }}</p>

                    @auth()
                        @if ($user->id === Auth::user()->id)
                            <a href="{{ route('perfil.index') }}" class="cursor-pointer text-gray-500 hover:text-gray-600">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                    <path d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32L19.513 8.2Z" />
                                </svg>                              
                            </a>
                        @endif
                    @endauth
                </div>

                <p class="text-gray-800 text-sm mb-3 font-bold mt-5">
                    0
                    <span class="font-normal"> Seguidores</span>
                </p>

                <p class="text-gray-800 text-sm mb-3 font-bold">
                    0
                    <span class="font-normal"> Siguiendo</span>
                </p>

                <p class="text-gray-800 text-sm mb-3 font-bold">
                    {{ $user->posts->count() }}
                    <span class="font-normal"> Post</span>
                </p>

                @auth()
                    @if ($user->id !== Auth::user()->id)
                        <form action="{{ route('users.follow', $user) }}" method="POST">
                            @csrf

                            <input 
                                type="submit"
                                class="bg-blue-600 text-white uppercase rounded-lg px-3 py-1 text-xs font-bold cursor-pointer"
                                value="Seguir"
                            />
                        </form>

                        <form action="{{ route('users.unfollow', $user) }}" method="POST">
                            @csrf
                            @method('DELETE')
    
                            <input 
                                type="submit"
                                class="bg-red-600 text-white uppercase rounded-lg px-3 py-1 text-xs font-bold cursor-pointer"
                                value="Dejar de Seguir"
                            />
                        </form>
                    @endif
                @endauth
            </div>
        </div>
    </div>

    <section class="container mx-auto mt-10 p-5">
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