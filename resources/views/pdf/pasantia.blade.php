<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificado de Conducta Estudiantil</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            font-size: 12px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th,
        td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .logo {
            width: 100px;
            height: auto;
        }

        .signature {
            display: inline-block;
            text-align: center;
            margin: 0 20px;
            margin-top: 150px;
        }

        .conducta {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="header">
        <img src="{{ public_path('images/logoc2.png') }}" alt="Logo" class="logo">
        <h1>Carta de prácticas pre-profesionales</h1>
        <h3>Universidad Politécnica de Ingeniería y Ciencias Aplicadas</h3>
        <p>Dirección: Calle Hernan Gmoiner 13, Quito</p>
        <p>Teléfono: (555) 123-4567</p>
        <p>Email: info@universidadica.com</p>
    </div>

    <div class="date">
        <p>{{ \Carbon\Carbon::now()->format('d/m/Y') }}</p>
    </div>

    <p>A quien corresponda:</p>

        <p>Por medio de la presente, certificamos que el estudiante <strong> {{ $user->name }} {{ $user->last_name }}</strong>, con cédula número <strong>{{ $user->cedula }}</strong>, está actualmente cursando la carrera de <strong>{{ $carrera->carrera_name }}</strong> en esta institución.</p>

        <p>El estudiante ha solicitado la realización de sus pasantías, las cuales son un requisito indispensable para la culminación de sus estudios, y que tienen como objetivo principal poner en práctica los conocimientos adquiridos a lo largo de su formación académica.</p>

        <p>Es por ello que solicitamos respetuosamente su apoyo y colaboración para que el estudiante pueda llevar a cabo sus pasantías en su prestigiosa empresa, bajo las condiciones que su organización considere adecuadas. Estamos seguros de que su participación en este programa será de gran beneficio tanto para el estudiante como para su empresa.</p>

        <p>Quedamos a su disposición para cualquier información adicional que necesite.</p>

        <p>Sin más que agregar, le enviamos un cordial saludo.</p>

        <div class="signature">
            <p style="margin-bottom: 70px;">Atentamente,</p>


            <p><strong>___________________________</strong></p>
            <p><strong>Mgs. Jorah Mormont</strong></p>
            <p>Director de la Carrera</p>
        </div>

        <div class="footer" style="text-align: center; margin-top: 70px;">
            <p>Universidad Politécnica de Ingeniería y Ciencias Aplicadas</p>
        </div>
</body>

</html>
