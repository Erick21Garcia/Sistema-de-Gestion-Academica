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
        th, td {
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
        <h1>Certificado de Conducta Estudiantil</h1>
    </div>

    <h2>Datos Personales</h2>
    <p><strong>Nombre:</strong> {{ $user->name }} {{ $user->last_name }}</p>
    <p><strong>Cédula:</strong> {{ $user->cedula }}</p>
    <p><strong>Celular:</strong> {{ $user->celular }}</p>
    <p><strong>Email:</strong> {{ $user->email }}</p>

    <h2>Historial Disciplinario</h2>
    <div class="conducta">
        <p><strong>Estado de Conducta:</strong>____________________</p>
        <p><strong>Observaciones:</strong>____________________</p>
        <p><strong>Fecha de Última Sanción:</strong>____________________</p>
    </div>

    <div style="text-align: center;">
        <div class="signature">
            <p>___________________________</p>
            <p>Firma del Estudiante</p>
        </div>
        <div class="signature">
            <p>___________________________</p>
            <p>Firma del Director de la Institución</p>
        </div>
    </div>
</body>
</html>
