@extends('layouts.app')

@section('titulo')
Editar perfil: {{ auth()->user()->username }}
@endsection


@section('contenido')
    <div class="md:flex md:justify-center">
        <div class="md:w-1/2 shadow bg-white p-6">

            <form  class="mt-10 md:mt-0" action="{{ route('perfil.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <div class="mb-5">
                    <label for="username" class="mb-2 block uppercase text-gray-500 font-bold">
                        Username
                    </label>
                    <input type="text" id="username" name="username" placeholder="Tu Nombre de usuario" class="border p-4 w-full rounded-lg @error('username') border-red-500  @enderror" value="{{ auth()->user()->username }}">

                    @error('username')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }} </p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">
                        E-mail
                    </label>
                    <input type="text" id="email" name="email" placeholder="Tu Nombre de usuario" class="border p-4 w-full rounded-lg @error('email') border-red-500  @enderror" value="{{ auth()->user()->email }}">

                    @error('email')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }} </p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="username" class="mb-2 block uppercase text-gray-500 font-bold">
                        Imagen perfil
                    </label>
                    <input type="file" id="imagen" name="imagen" class="border p-4 w-full rounded-lg" value="" accept=".jpg, .png, .jpeg">

                </div>

                <input 
                type="submit"
                value="Guardar cambios"
                class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full rounded-lg p-3 text-white text-center"
                
                />

            </form>

        </div>

    </div>
    
@endsection