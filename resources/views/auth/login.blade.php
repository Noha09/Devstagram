@extends('layouts.app')

@section('titulo')
Inicia Sesion en DevStagram
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:items-center md:gap-10">
        <div class="md:w-6/12 p-5">
            <img src="{{ asset('img/login.jpg') }}" alt="Imagen Registro">
        </div>

        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
            <form action="{{ route('login')}}" method="POST" novalidate>
                @csrf

                @if (session('mensaje'))
                    <p class="bg-red-500 text-white my-2 rounded-lg text-center text-sm p-2">{{ session('mensaje') }}</p>
                @endif

                <div class="mb-5">
                    <label for="email" class="block mb-2 uppercase text-gray-500 font-bold">E-mail</label>

                    <div class="flex">
                        <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-md">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                            </svg>                                                  
                        </span>
                        <input 
                            type="email" 
                            id="email"
                            name="email"
                            class="border-gray-300 p-3 w-full rounded-e-lg @error('email')
                                bg-red-50 border border-red-500 text-red-900 placeholder-red-700
                            @enderror" 
                            placeholder="Tu Email"
                            value="{{ old('email') }}"
                        />
                    </div>

                    @error('email')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-center text-sm p-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="password" class="block mb-2 uppercase text-gray-500 font-bold">Password</label>

                    <div class="flex">
                        <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-md">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                            </svg>                                                 
                        </span>
                        <input 
                            type="password" 
                            id="password"
                            name="password"
                            class="border-gray-300 p-3 w-full rounded-e-lg @error('password')
                                bg-red-50 border border-red-500 text-red-900 placeholder-red-700
                            @enderror" 
                            placeholder="Tu password"
                        />
                    </div>

                    @error('password')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-center text-sm p-2">{{ $message }}</p>
                    @enderror
                </div>

                <input 
                    type="submit" 
                    value="Iniciar Sesion"
                    class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg"
                />
            </form>
        </div>
    </div>
@endsection