<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Chirps</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased font-sans bg-gradient-to-r from-blue-500 via-purple-600 to-pink-500 text-white">

    <div class="min-h-screen flex items-center justify-center">
        <div class="max-w-lg w-full p-8 bg-white dark:bg-zinc-900 text-gray-900 dark:text-white shadow-xl rounded-lg">
            <div class="text-center">
                <h1 class="text-5xl font-extrabold bg-clip-text text-transparent bg-gradient-to-r from-green-400 via-blue-500 to-purple-600">
                    Chirps
                </h1>
                <p class="mt-4 text-lg">
                    Conecte-se e compartilhe seus pensamentos com o mundo de forma simples e rápida.
                </p>
            </div>

            <div class="mt-8 flex flex-col md:flex-row justify-center space-y-4 md:space-y-0 md:space-x-4">
                <a href="{{ route('login') }}" class="flex-1 px-5 py-3 text-center bg-gradient-to-r from-blue-500 via-purple-600 to-pink-500 hover:bg-gradient-to-l hover:from-pink-500 hover:via-purple-600 hover:to-blue-500 rounded-md text-white font-semibold shadow-md transition-transform transform hover:-translate-y-1 focus:outline-none focus:ring-2 focus:ring-purple-500">
                    Login
                </a>
                <a href="{{ route('register') }}" class="flex-1 px-5 py-3 text-center bg-gradient-to-r from-blue-500 via-purple-600 to-pink-500 hover:bg-gradient-to-l hover:from-pink-500 hover:via-purple-600 hover:to-blue-500 rounded-md text-white font-semibold shadow-md transition-transform transform hover:-translate-y-1 focus:outline-none focus:ring-2 focus:ring-purple-500">
                    Cadastrar
                </a>
            </div>

            <div class="mt-12 text-center">
                <p class="text-sm text-gray-500 dark:text-gray-400">
                    Explore um novo mundo de conversas e conexões.
                </p>
            </div>
        </div>
    </div>

</body>
</html>
