<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Sistema de Gestión Académica</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="icon" type="image/png" href="{{ asset('images/logoc2.png') }}">
    <link rel="shortcut icon" href="{{ asset('images/logoc2.png') }}">
    <style>
        .background-image {
            background-image: url('{{ asset('images/universidad.jpg') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            padding: 0 20px;
            margin-left: 80px
        }

        /* Estilos para acercar el logo y el formulario */
        .form-container,
        .logo-container {
            width: 45%;
        }

        /* Ajustamos para centrar y reducir la distancia */
        .centered-content {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            gap: 20px; /* Ajustamos el espacio entre el formulario y el logo */
        }

        .form-box {
            width: 100%;
            max-width: 600px;
            background-color: #1f2937;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            font-size: 12px;
        }

        input,
        select {
            font-size: 12px;
        }

        label {
            font-size: 12px;
        }

        .form-box button {
            padding: 8px 12px;
        }

        .form-box a {
            font-size: 10px;
        }

        /* Estilo para dividir el formulario en dos columnas */
        .grid-form {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }

        .grid-form div {
            display: flex;
            flex-direction: column;
        }

        /* Para los campos que ocupan toda la fila */
        .full-width {
            grid-column: span 2;
        }

        /* Centrado del logo */
        .logo-container img {
            display: block;
            margin: 0 auto;
        }
    </style>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased">
    <div class="background-image">
        <div class="container centered-content">
            <!-- Formulario a la izquierda -->
            <div class="form-container">
                <div class="form-box">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="grid-form">
                            <div>
                                <x-input-label for="name" :value="__('Nombre')" />
                                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                                    :value="old('name')" required autofocus autocomplete="name" />
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>

                            <div>
                                <x-input-label for="last_name" :value="__('Apellido')" />
                                <x-text-input id="last_name" class="block mt-1 w-full" type="text" name="last_name"
                                    :value="old('last_name')" required autocomplete="last_name" />
                                <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
                            </div>

                            <div>
                                <x-input-label for="role" :value="__('Rol')" />
                                <select id="role" name="role" class="block w-full mt-1 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" required>
                                    <option value="estudiante" {{ old('role') == 'estudiante' ? 'selected' : '' }}>
                                        {{ __('Estudiante') }}</option>
                                    <option value="profesor" {{ old('role') == 'profesor' ? 'selected' : '' }}>
                                        {{ __('Profesor') }}</option>
                                </select>
                                <x-input-error :messages="$errors->get('role')" class="mt-2" />
                            </div>

                            <div>
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                                    :value="old('email')" required autocomplete="username" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <div>
                                <x-input-label for="celular" :value="__('Celular')" />
                                <x-text-input id="celular" class="block mt-1 w-full" type="text" name="celular"
                                    :value="old('celular')" required autocomplete="tel" />
                                <x-input-error :messages="$errors->get('celular')" class="mt-2" />
                            </div>

                            <div>
                                <x-input-label for="cedula" :value="__('Cédula')" />
                                <x-text-input id="cedula" class="block mt-1 w-full" type="text" name="cedula"
                                    :value="old('cedula')" required autocomplete="off" />
                                <x-input-error :messages="$errors->get('cedula')" class="mt-2" />
                            </div>

                            <div>
                                <x-input-label for="password" :value="__('Contraseña')" />
                                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password"
                                    required autocomplete="new-password" />
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>

                            <div>
                                <x-input-label for="password_confirmation" :value="__('Confirmar Contraseña')" />
                                <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                                    name="password_confirmation" required autocomplete="new-password" />
                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </div>

                            <!-- Botones -->
                            <div class="flex items-center justify-end mt-4 full-width">
                                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                                    href="{{ route('login') }}">
                                    {{ __('¿Ya estas registrado?') }}
                                </a>

                                <x-primary-button class="ms-3">
                                    {{ __('Registrarse') }}
                                </x-primary-button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Logo a la derecha -->
            <div class="logo-container">
                <a href="/">
                    <img src="{{ asset('images/logoc1.jpg') }}" alt="Logo Picture" class="rounded-circle" style="width: 290px; height: 290px;">
                </a>
            </div>
        </div>
    </div>
</body>

</html>