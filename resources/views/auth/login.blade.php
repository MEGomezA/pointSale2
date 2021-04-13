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
            background-color: #9921e8;
            background-image: linear-gradient(315deg, #9921e8 0%, #6e85e4 74%);
        }
    </style>
</head>

<body class="body-bg min-h-screen pt-12 md:pt-1 pb-6 px-2 md:px-0" style="font-family:'Lato',sans-serif;">
    
    <main class="bg-white max-w-lg mx-auto p-8 md:p-12 my-10 rounded-lg shadow-2xl">
        <section>
            <h3 class="font-bold text-2xl">Bienvenido a PointSale</h3>
            <p class="text-gray-600 pt-2">Inicia sesión con tu cuenta.</p>
        </section>

        <section class="mt-10">
            <x-jet-validation-errors class="mb-4" />

            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif
            <form class="flex flex-col" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="email">Correo</label>
                    <input type="text" id="email" name="email" type="email" name="email" :value="old('email')" required autofocus
                        class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-600 transition duration-500 px-3 pb-3">
                </div>
                <div class="mb-0 pt-3 rounded bg-gray-200">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="password">Contraseña</label>
                    <input type="password" id="password" type="password" name="password" required autocomplete="current-password" 
                        class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-600 transition duration-500 px-3 pb-3">
                </div>
                <div class="block mt-4">
                    <label for="remember_me" class="flex items-center">
                        <x-jet-checkbox id="remember_me" name="remember" />
                        <span class="ml-2 text-sm text-gray-600">{{ __('Recordar') }}</span>
                    </label>
                </div>
                <div class="flex justify-end">
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}"
                            class="text-sm text-purple-600 hover:text-purple-700 hover:underline mb-6">
                            Olvidaste tu contraseña?</a>
                    @endif
                </div>
                <button
                    class="bg-purple-600 hover:bg-blue-600 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200"
                    type="submit">Iniciar sesión</button>
            </form>
        </section>
    </main>

    <div class="max-w-lg mx-auto text-center mt-0 mb-1">
        <p class="text-white">Aún no tienes una cuenta? <a href="{{ route('register') }}"
                class="font-bold hover:underline">Registrate</a>.
        </p>
    </div>
</body>
