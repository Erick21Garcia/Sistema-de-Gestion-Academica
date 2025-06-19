<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="mb-4"> <!-- Reducido el padding y margin -->
        <div class="max-w-7xl mx-auto sm:px-2 lg:px-4 flex space-y-2"> <!-- Reducido el padding horizontal -->
            <div class="flex-1 p-2 sm:p-4 bg-white dark:bg-gray-800 shadow sm:rounded-lg flex"> <!-- Reducido el padding del contenedor -->
                <div class="w-1/4 flex justify-center items-center">
                    <img src="{{ asset('images/estudiante.jpg') }}" alt="Profile Picture" class="w-24 h-24 rounded-full ml-3">
                </div>
                <div class="flex-1 pl-4 mt-1 ml-6"> <!-- Reducido el padding y margin izquierdo -->
                    <h2 class="text-lg font-medium text-gray-900"> <!-- Tamaño de texto más grande -->
                        {{ __('Información de Perfil') }}
                    </h2>                    
                    <p class="text-sm">Nombre: {{ $user->name }}</p> <!-- Tamaño de texto más pequeño -->
                    <p class="text-sm">Apellido: {{ $user->last_name }}</p>
                    <p class="text-sm">Cédula: {{ $user->cedula }}</p>
                    <p class="text-sm">Número celular: {{ $user->celular }}</p>
                    <p class="text-sm">Correo electrónico: {{ $user->email }}</p>
                    <p class="text-sm">Carrera: {{ $user->career->carrera_name ?? '-' }}</p>
                    <p class="text-sm">Facultad: {{ $user->career->facultad->nombre_facultad ?? '-' }}</p>
                </div>
            </div>
        </div>
    </div>             

    <div class="py-11">
        <div class="max-w-7xl mx-auto sm:px-4 lg:px-6 space-y-3">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg mb-6">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg mb-6">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg mb-6">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
