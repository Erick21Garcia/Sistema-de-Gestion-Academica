<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-lg text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Enrollment') }}
        </h2>
    </x-slot>
    <div class="py-11">
        @if (session('success'))
            <div class="max-w-7xl mx-auto sm:px-4 lg:px-6 flex space-y-3 mb-2">
                <div class="flex-1 p-3 sm:p-5 bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg flex flex-col">
                    <div class="alert alert-success">{{ session('success') }}</div>
                </div>
            </div>
        @endif
        @if (session('error'))
            <div class="max-w-7xl mx-auto sm:px-4 lg:px-6 flex space-y-3 mb-2">
                <div class="flex-1 p-3 sm:p-5 bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg flex flex-col">
                    <div class="alert alert-danger">{{ session('error') }}</div>
                </div>
            </div>
        @endif
        <div class="max-w-7xl mx-auto sm:px-4 lg:px-6 flex space-y-3">
            <div class="flex-1 p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg flex flex-col">
                <div class="container">
                    <h3 class="mb-3">Carreras Universitarias</h3>
                    <div class="row mb-2">
                        @php
                            $user = auth()->user();
                        @endphp
                        @foreach ($carreras as $carrera)
                            <div class="col-md-6 mb-1">
                                <div class="card card-sm">
                                    <div class="card-body p-2">
                                        <h5 class="card-title">{{ $carrera->carrera_name }}</h5>
                                        <p class="card-text">{{ $carrera->carrera_description }}</p>
                                        @if ($user->carrera_id == $carrera->id)
                                            <span class="text-success">Usted ya se encuentra matriculado en
                                                esta carrera</span>
                                        @else
                                            <form action="{{ route('matricular', $carrera->id) }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="f_inscripcion"
                                                    value="{{ now()->format('Y-m-d') }}">
                                                <button type="submit"
                                                    class="btn btn-sm {{ $user->carrera_id ? 'btn-secondary' : 'btn-primary' }}"
                                                    {{ $user->carrera_id ? 'disabled' : '' }}>
                                                    Matricularse
                                                </button>
                                            </form>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <h1 class="mb-3">&nbsp;</h1>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
