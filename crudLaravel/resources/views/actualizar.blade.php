@extends('layout.app')

@section('titulo')
Actualizar Usuario
@endsection

@section('contenido')
<div class="flex justify-start">
    <div class="w-96 flex justify-start">
        <form action="{{ route('editar', $user->id) }}" method="post" class="w-full md:w-96 flex flex-col p-4 bg-gray-100 rounded-md shadow-md">
            @csrf
            @method("PUT")

            <label for="name" class="text-black font-semibold mt-2">Nombre:</label>
            <input type="text" id="name" name="name" class="form-input border border-black p-2 rounded-md focus:outline-none focus:border-green-500" required value="{{ $user->name }}">

            <label for="identification" class="text-black font-semibold mt-2">Identificación:</label>
            <input type="text" id="identification" name="identification" class="form-input border border-black p-2 rounded-md focus:outline-none focus:border-green-500" required value="{{ $user->identification }}">

            <label for="phone" class="text-black font-semibold mt-2">Teléfono:</label>
            <input type="tel" id="phone" name="phone" class="form-input border border-black p-2 rounded-md focus:outline-none focus:border-green-500" required value="{{ $user->phone }}">

            <label for="address" class="text-black font-semibold mt-2">Dirección:</label>
            <input type="text" id="address" name="address" class="form-input border border-black p-2 rounded-md focus:outline-none focus:border-green-500" required value="{{ $user->address }}">

            <button type="submit" class="mt-6 bg-gray-700 hover:bg-gray-500 text-white py-2 px-4 rounded-md focus:outline-none">Actualizar</button>
        </form>
    </div>
</div>


@endsection
