<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Bootstrap Sidebar</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .sidebar {
            background-color: #2c2c2c;
            height: auto;
            overflow-y: auto;
            padding: 15px;
        }

        .sidebar h2 {
            font-size: 1.5rem;
            color: #fff;
            text-align: center;
            border-bottom: 2px solid #4f4f4f;
            padding-bottom: 10px;
        }

        .nav-link {
            color: #b0b0b0;
            font-size: 1.1rem;
            margin: 5px 0;
            padding: 10px 15px;
            border-radius: 5px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .nav-link:hover {
            background-color: #3e3e3e;
            color: #fff;
        }

        .nav-link.active {
            background-color: #ffffff;
            color: #2c2c2c;
            font-weight: bold;
        }

        .nav-link.active:hover {
            background-color: #f0f0f0;
            color: #2c2c2c;
        }

        .flex-grow-1 {
            background-color: #f8f9fa;
            padding: 20px;
        }
    </style>
</head>

<body class="d-flex flex-column vh-100">
    <div class="d-flex">
        <div class="sidebar d-none d-md-flex flex-column">
            <h2>Menú</h2>
            <nav class="nav flex-column">
                <a href="{{ url('profile') }}" class="nav-link {{ Request::is('profile') ? 'active' : '' }}">Perfil</a>
                <a href="{{ url('calificaciones') }}" class="nav-link {{ Request::is('calificaciones') ? 'active' : '' }}">Calificaciones</a>
                <a href="{{ url('matricula') }}" class="nav-link {{ Request::is('matricula') || Request::is('derecho') || Request::is('ciencias') || Request::is('ingenieria') ? 'active' : '' }}">Matrícula</a>
                <a href="{{ url('certificados') }}" class="nav-link {{ Request::is('certificados') ? 'active' : '' }}">Certificados</a>
            </nav>
        </div>
        <div class="flex-grow-1">
            {{ $slot ?? '' }}
            @yield('content')
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
