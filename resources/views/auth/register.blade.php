@extends('layouts.app')

@section('titulo')
Registrate en DevStagram
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:items-center md:gap-10">
        <div class="md:w-6/12 p-5">
            <img src="{{ asset('img/registrar.jpg') }}" alt="Imagen Registro">
        </div>

        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
            <form action="" method="POST">
                <div class="mb-5">
                    <label for="name" class="block mb-2 uppercase text-gray-500 font-bold">Nombre</label>

                    <div class="flex">
                        <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-md">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                            </svg>                                                 
                        </span>
                        <input 
                            type="text" 
                            id="name"
                            name="name"
                            class="border-gray-300 p-3 w-full rounded-e-lg" 
                            placeholder="Tu nombre"
                        />
                    </div>
                </div>
                
                <div class="mb-5">
                    <label for="username" class="block mb-2 uppercase text-gray-500 font-bold">Usuario</label>

                    <div class="flex">
                        <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-md">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            </svg>                                                   
                        </span>
                        <input 
                            type="text" 
                            id="username"
                            name="username"
                            class="border-gray-300 p-3 w-full rounded-e-lg" 
                            placeholder="Tu nombre de usuario"
                        />
                    </div>
                </div>

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
                            class="border-gray-300 p-3 w-full rounded-e-lg" 
                            placeholder="Tu Email"
                        />
                    </div>
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
                            class="border-gray-300 p-3 w-full rounded-e-lg" 
                            placeholder="Tu password"
                        />
                    </div>
                </div>

                <div class="mb-5">
                    <label for="password_confirmation" class="block mb-2 uppercase text-gray-500 font-bold">Repetir Password</label>

                    <div class="flex">
                        <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-md">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                            </svg>                                                 
                        </span>
                        <input 
                            type="password" 
                            id="password_confirmation"
                            name="password_confirmation"
                            class="border-gray-300 p-3 w-full rounded-e-lg" 
                            placeholder="Repite tu password"
                        />
                    </div>
                </div>

                <input 
                    type="submit" 
                    value="Crear Cuenta"
                    class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg"
                />
            </form>
        </div>
    </div>
@endsection