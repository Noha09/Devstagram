@extends('layouts.app')

@section('titulo')
    Crea una Nueva Publicacion
@endsection

@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
@endpush

@section('contenido')
    <div class="md:flex md:items-center">
        <div class="md:w-1/2 px-10">
            <form id="dropzone" action="{{ route('img.store') }}" method="POST" enctype="multipart/form-data" class="dropzone border-dashed border-2 w-full h-96 rounded flex flex-col justify-center items-center">
                @csrf
            </form>
        </div>

        <div class="md:w-1/2 p-10 bg-white rounded-lg shadow-xl mt-10 md:mt-0">
            <form action="{{ route('post.store') }}" method="POST" novalidate>
                @csrf

                <div class="mb-5">
                    <label for="titulo" class="block mb-2 uppercase text-gray-500 font-bold">Titulo</label>

                    <div class="flex">
                        <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-md">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 0 0 3 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 0 0 5.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 0 0 9.568 3Z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6Z" />
                            </svg>                                                                          
                        </span>
                        <input 
                            type="text" 
                            id="titulo"
                            name="titulo"
                            class="border-gray-300 p-3 w-full rounded-e-lg @error('titulo')
                                bg-red-50 border border-red-500 text-red-900 placeholder-red-700
                            @enderror" 
                            placeholder="Titulo de la Publicacion"
                            value="{{ old('titulo') }}"
                        />
                    </div>

                    @error('titulo')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-center text-sm p-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="descripcion" class="block mb-2 uppercase text-gray-500 font-bold">Descripcion</label>
                        
                    <textarea 
                        id="descripcion"
                        name="descripcion"
                        rows="4"
                        class="block p-2.5 w-full text-sm text-gray-900 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 @error('descripcion')
                            bg-red-50 border-red-500 text-red-900 placeholder-red-700
                        @enderror" 
                        placeholder="Descripcion de la Publicacion..."
                    >{{ old('descripcion') }}</textarea>

                    @error('descripcion')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-center text-sm p-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <input 
                        type="hidden"
                        name="imagen"
                        value="{{ old('imagen') }}"
                    />

                    @error('imagen')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-center text-sm p-2">{{ $message }}</p>
                    @enderror
                </div>

                <input 
                    type="submit" 
                    value="Publicar"
                    class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg"
                />
            </form>
        </div>
    </div>
@endsection