<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Grades') }}
        </h2>
    </x-slot>

    <div class="py-11">
        <div class="max-w-7xl mx-auto sm:px-4 lg:px-6 flex space-y-3">
            <div class="flex-1 p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg flex flex-col">
                <div class="container">
                    <h2 class="mb-5">Calificaciones</h2>
                    <div class="d-grid gap-3">
                        <table class="table table-striped w-full border-collapse">
                            <thead>
                                <tr>
                                    <th class="text-center">Materia</th>
                                    <th class="text-center">Calificación</th>
                                    <th class="text-center">Última modificación</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $user = auth()->user();
                                    $carreraId = $user->carrera_id;
                                    $materiasFiltradas = $materias->filter(function ($materia) use ($carreraId) {
                                        return $materia->carrera_id == $carreraId;
                                    });
                                @endphp

                                @forelse ($materiasFiltradas as $materia)
                                    <tr>
                                        <td class="text-center">{{ $materia->materia_name }}</td>
                                        @php
                                            $calificacion = $calificaciones->firstWhere('materia_id', $materia->id);
                                        @endphp
                                        @if ($calificacion)
                                            <td class="text-center">{{ $calificacion->calificacion }}</td>
                                            <td class="text-center">{{ $calificacion->fecha_subida }}</td>
                                        @else
                                            <td class="text-center" colspan="1">Sin calificación</td>
                                            <td class="text-center" colspan="1">Sin fecha</td>
                                        @endif
                                    </tr>
                                @empty
                                    @for ($i = 0; $i < 5; $i++)
                                        <tr>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                        </tr>
                                    @endfor
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <h1 class="mb-2">&nbsp;</h1>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
