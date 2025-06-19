<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Gestión Académica</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('images/logoc2.png') }}">
    <link rel="shortcut icon" href="{{ asset('images/logoc2.png') }}">

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-image: url('images/universidad.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            color: #333;
            position: relative;
            height: 100vh;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            /* Mantenemos la superposición oscura */
            z-index: 1;
        }

        .welcome-container {
            position: relative;
            z-index: 2;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 0 20px;
            color: #fff;
        }

        h1 {
            font-size: 4rem;
            font-weight: bold;
            color: #e74c3c;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
            margin-bottom: 1.5rem;
            letter-spacing: 2px;
            animation: fadeInUp 2s ease-in-out;
        }

        h3 {
            font-weight: bold;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
            margin-bottom: 1.5rem;
            letter-spacing: 2px;
            animation: fadeInUp 3s ease-in-out;
        }

        .links>a {
            background-color: #e74c3c;
            color: #fff;
            font-size: 1.2rem;
            font-weight: 500;
            text-decoration: none;
            padding: 12px 30px;
            border-radius: 50px;
            margin: 10px 15px;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(231, 76, 60, 0.3);
        }

        .links>a:hover {
            background-color: #c0392b;
            box-shadow: 0 8px 20px rgba(231, 76, 60, 0.5);
            transform: translateY(-5px);
        }

        .underline {
            height: 4px;
            width: 300px;
            background-color: #e74c3c;
            margin: 10px auto;
            border-radius: 2px;
        }

        footer {
            position: absolute;
            bottom: 20px;
            text-align: center;
            width: 100%;
            font-size: 0.9rem;
            color: #f8f9fa;
            z-index: 2;
        }

        .btn-danger:hover {
            background-color: white;
            color: red;
            border: white;
        }


        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>
    <div class="overlay"></div>
    <div class="welcome-container">
        <h1>Universidad Politécnica de Ingeniería y Ciencias Aplicadas</h1>
        <h3>Sistema de Gestión Académica</h3>
        <div class="underline"></div>

        <div class="links mt-4">
            @if (Route::has('login'))
                <div class="d-inline-block">
                    @auth
                        <a href="{{ url('/profile') }}" class="btn btn-danger btn-lg px-4 py-2 rounded-pill me-3">Inicio</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-danger btn-lg px-4 py-2 rounded-pill me-3">Iniciar
                            sesión</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="btn btn-danger btn-lg px-4 py-2 rounded-pill">Registrarse</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </div>

    <footer>
        © {{ date('Y') }} Universidad Politécnica de Ingeniería y Ciencias Aplicadas - Todos los derechos reservados
    </footer>
</body>

</html>
