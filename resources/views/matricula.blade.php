<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Enrollment') }}
        </h2>
    </x-slot>
    <div class="py-11">
        <div class="max-w-7xl mx-auto sm:px-4 lg:px-6 flex space-y-3">
            <div class="flex-1 p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg flex flex-col">
                <div class="container">
                    <h2>Matrícula</h2>
                    <h5 class="mb-4"> Facultades</h5>
                    <div class="d-grid gap-3">
                        <button
                            class="btn btn-info btn-large d-flex align-items-center justify-content-between text-start"
                            onclick='window.location.href="/ingenieria"'>
                            <div>
                                <h5>Facultad de Ingeniería</h5>
                                <p>Innovación y tecnología</p>
                                <p>Ingeniería Civil, Eléctrica, Mecánica y de Sistemas.</p>
                            </div>
                            <img src="{{ asset('images/ingenieria.jpg') }}" alt="Career Image"
                                class="img-fluid rounded-circle border" style="max-width: 200px;">
                        </button>
                        <button
                            class="btn btn-danger btn-large d-flex align-items-center justify-content-between text-start"
                            onclick='window.location.href="/derecho"'>
                            <div>
                                <h5>Facultad de Derecho</h5>
                                <p>Justicia, ética y el servicio a la sociedad</p>
                                <p>Licenciatura en Derecho Civil, Penal, Laboral y Constitucional.</p>
                            </div>
                            <img src="{{ asset('images/derecho.jpg') }}" alt="Career Image"
                                class="img-fluid rounded-circle border" style="max-width: 200px;">
                        </button>
                        <button
                            class="btn btn-success btn-large d-flex align-items-center justify-content-between text-start"
                            onclick='window.location.href="/ciencias"'>
                            <div>
                                <h5>Facultad de Ciencias</h5>
                                <p>investigación y la sostenibilidad</p>
                                <p>Licenciatura en Biología, Química, Física y Geología.</p>
                            </div>
                            <img src="{{ asset('images/ciencias.jpg') }}" alt="Career Image"
                                class="img-fluid rounded-circle border" style="max-width: 200px;">
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
