<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PointSale</title>
    <meta name="description" content="">

    <link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <style>
        .body-bg {
            background-color: #5f72be;
            background-image: linear-gradient(315deg, #5f72be 0%, #9921e8 74%);
        }
    </style>
</head>
<body class="body-bg min-h-screen pt-12 md:pt-0 pb-6 px-2 md:px-0" style="font-family:'Lato',sans-serif;">
    
    <main class="bg-white max-w-lg mx-auto p-8 md:p-9 my-3 rounded-lg shadow-2xl">
        <section>
            <h3 class="font-bold text-2xl">Bienvenido a PointSale</h3>
            <p class="text-gray-600 pt-0">Crea una cuenta</p>
        </section>

        <section class="mt-3">
            <x-jet-validation-errors class="mb-4" />
            <form class="flex flex-col" method="POST" action="{{ route('register') }}">
                @csrf
                <div class="mb-3 pt-3 rounded bg-gray-200">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="name">Nombre</label>
                    <input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" 
                    class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-blue-600 transition duration-500 px-3 pb-3">
                </div>
                <div class="mb-3 pt-3 rounded bg-gray-200">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="email">Correo</label>
                    <input id="email" type="email" name="email" :value="old('email')" required 
                    class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-blue-600 transition duration-500 px-3 pb-3">
                </div>
                <div class="mb-3 pt-3 rounded bg-gray-200">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="password">Contraseña</label>
                    <input id="password" type="password" name="password" required autocomplete="new-password"
                    class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-blue-600 transition duration-500 px-3 pb-3">
                </div>
                <div class="mb-3 pt-3 rounded bg-gray-200">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="password_confirmation">Password</label>
                    <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password"
                    class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-blue-600 transition duration-500 px-3 pb-3">
                </div>
                <button class="bg-blue-600 hover:bg-purple-600 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200"
                type="submit">Registrar</button>
            </form>
        </section>
    </main>

    <div class="max-w-lg mx-auto text-center mt-0 mb-0">
        <p class="text-white">Ya tienes una cuenta? <a href="{{ route('login') }}" 
            class="font-bold hover:underline">Inicia sesión</a>.</p>
    </div>
    <footer class="max-w-lg mx-auto flex justify-center text-white">
        <a href="#" class="hover:underline">Contact</a>
        <span class="mx-3">•</span>
        <a href="#" class="hover:underline">Privacy</a>
    </footer>
</body>
