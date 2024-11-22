@extends('layouts.app')

@section('titulo')
    Editar Perfil: {{ Auth::user()->name }}
@endsection

@section('contenido')
    <div class="md:flex md:justify-center">
        <div class="md:w-1/2 bg-white shadow p-6">
            <form action="{{ route('perfil.store') }}" class="mt-10 md:mt-0" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-5">
                    <label for="username" class="block mb-2 uppercase text-gray-500 font-bold">Username</label>

                    <div class="flex">
                        <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-md">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                            </svg>                                                 
                        </span>
                        <input 
                            type="text" 
                            id="username"
                            name="username"
                            class="border-gray-300 p-3 w-full rounded-e-lg @error('username')
                                bg-red-50 border border-red-500 text-red-900 placeholder-red-700
                            @enderror" 
                            placeholder="Tu Nombre de Usuario"
                            value="{{ Auth::user()->username }}"
                        />
                    </div>

                    @error('username')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-center text-sm p-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label class="block mb-2 uppercase text-gray-500 font-bold" for="img">Imagen Perfil</label>
                    <input 
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50"
                        id="img"
                        name="img"
                        type="file"
                        accept=".jpg, .jpeg, .png"
                    />
                </div>

                <input 
                    type="submit" 
                    value="Guardar Cambios"
                    class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg"
                />
            </form>
        </div>
    </div>
@endsection