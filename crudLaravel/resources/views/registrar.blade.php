@extends('layout.app')

@section('titulo')
Registrar
@endsection

@section('contenido')
<div class="flex justify-center">
    <div class="w-96 flex justify-center">
        <form method="post" class="w-96 flex flex-col p-4 bg-blue-300 rounded-md ">
            @csrf
            <label class="p-3 text-gray-800" for="name">Nombre:</label>
            <input type="text" id="name" name="name" class="border border-gray-300 p-2 rounded-md" required>
            @error('name')
                <p class="bg-red-500 text-gray-800 text-left rounded-lg p-3">{{ $message }}</p>
            @enderror

            <label class="p-3 text-gray-800" for="identification">Identificación:</label>
            <input type="text" id="identification" name="identification" class="border border-gray-300 p-2 rounded-md" required>
            @error('identification')
                <p class="bg-red-500 text-gray-800 text-left rounded-lg p-3 ">{{ $message }}</p>
            @enderror

            <label class="p-3 text-gray-800" for="phone">Teléfono:</label>
            <input type="tel" id="phone" name="phone" class="border border-gray-300 p-2 rounded-md" required>
            @error('phone')
                <p class="bg-red-500 text-gray-800 text-left rounded-lg p-3">{{ $message }}</p>
            @enderror

            <label class="p-3 text-gray-800" for="address">Dirección:</label>
            <input type="text" id="address" name="address" class="border border-gray-300 p-2 rounded-md" required>
            @error('address')
                <p class="bg-red-500 text-gray-800 text-left rounded-lg p-3">{{ $message }}</p>
            @enderror

            <button type="submit" class="mt-10 p-3 bg-green-600 hover:bg-green-400 text-white py-2 px-4">Registrar</button>
        </form>
    </div>
</div>





@endsection
