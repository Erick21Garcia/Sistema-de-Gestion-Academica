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
                    <h2>Certificados</h2>
                    <div class="container mt-4">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <h3>Hoja de matrícula del estudiante</h3>
                                <p>Documento que contiene un resumen del proceso de inscripción a las materias de un semestre o período académico.</p>
                            </div>
                            <div class="col-md-4 text-end">
                                <a href="{{ route('pdf.download.dynamic') }}" class="btn btn-primary">Descargar PDF</a>
                            </div>
                        </div>
                    </div>

                    <div class="container mt-5">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <h3>Boleta de calificaciones</h3>
                                <p>Informe de las calificaciones obtenidas en un semestre o período académico.</p>
                            </div>
                            <div class="col-md-4 text-end">
                            <a href="{{ route('pdf.download.static') }}" class="btn btn-primary">Descargar PDF</a>
                            </div>
                        </div>
                    </div>

                    <div class="container mt-5">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <h3>Certificado de conducta estudiantil</h3>
                                <p>Documento que refleja el historial disciplinario del estudiante.</p>
                            </div>
                            <div class="col-md-4 text-end">
                            <a href="{{ route('pdf.download.conducta') }}" class="btn btn-primary">Descargar PDF</a>
                            </div>
                        </div>
                    </div>

                    <div class="container mt-5">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <h3>Carta de prácticas o pasantías</h3>
                                <p>Documento que certifica la realización de prácticas profesionales o pasantías por parte del estudiante.</p>
                            </div>
                            <div class="col-md-4 text-end">
                            <a href="{{ route('pdf.download.pasantia') }}" class="btn btn-primary">Descargar PDF</a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
