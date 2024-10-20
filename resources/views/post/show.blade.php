@extends('layouts.app')

@section('titulo')
    {{ $post->titulo }}
@endsection

@section('contenido')
    <div class="container mx-auto flex">
        <div class="md:w-1/2 p-5">
            <img src="{{ asset('uploads') . '/' . $post->imagen }}" alt="Imagen del Post {{ $post->titulo }}">

            <div class="p-3">
                <p>0 Likes</p>
            </div>

            <div>
                <p class="font-bold">{{ $post->user->username }}</p>

                <p class="text-sm text-gray-500">
                    {{ $post->created_at->diffForHumans() }}
                </p>

                <p class="mt-5">
                    {{ $post->descripcion }}
                </p>
            </div>
        </div>

        <div class="md:w-1/2 p-5">
            <div class="shadow bg-white p-5 mb-5">
                @auth()
                    <p class="text-xl font-bold text-center mb-4">
                        Agrega un nuevo comentario
                    </p>

                    <form action="">
                        <div class="mb-5">
                            <label for="comentario" class="block mb-2 uppercase text-gray-500 font-bold">Comentario</label>
                            
                            <textarea 
                                id="comentario"
                                name="comentario"
                                rows="4"
                                class="block p-2.5 w-full text-sm text-gray-900 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 @error('descripcion')
                                    bg-red-50 border-red-500 text-red-900 placeholder-red-700
                                @enderror" 
                                placeholder="Agrega un Comentario..."
                            ></textarea>
    
                            @error('comentario')
                                <p class="bg-red-500 text-white my-2 rounded-lg text-center text-sm p-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <input 
                            type="submit" 
                            value="Comentar"
                            class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg"
                        />
                    </form>
                @endauth
            </div>
        </div>
    </div>
@endsection