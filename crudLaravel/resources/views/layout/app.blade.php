<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
</head>
<body>
<header>
    <nav class="bg-green-500">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex w-1/6">
                <a href="/">
                    <h1 class="text-3xl w-1/6 font-black w-30">
                        <div class="text-black text-lg font-bold">Registrar Usuarios</div>
                    </h1>
                </a>
            </div>

            <ul class="flex space-x-4">
                <li><a href="/" class="text-black p-4 hover:bg-green-300">Inicio</a></li>
                <li><a href="{{ route('registrar') }}" class="text-black p-4 hover:bg-green-300">Registrar</a></li>
                <li><a href="{{ route('listar') }}" class="text-black p-4 hover:bg-green-300">Listar</a></li>
            </ul>
        </div>
    </nav>
</header>
<main class="text-left">
    <h2 class="font-black text-3xl mb-10">@yield('titulo')</h2>
    <div>
        @yield('contenido')
    </div>
</main>
</body>
</html>
