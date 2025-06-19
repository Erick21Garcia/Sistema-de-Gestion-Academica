<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boleta de calificaciones</title>
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
        .signature {
            display: inline-block;
            text-align: center;
            margin: 0 20px;
            margin-top: 200px;
        }
    </style>
</head>
<body>
    <div class="header">
        <img src="{{ public_path('images/logoc2.png') }}" alt="Logo" class="logo" style="width: 100px; height: auto;">
        <h1>Boleta de Calificaciones</h1>
    </div>

    <p><strong>Nombre:</strong> {{ $user->name }} {{ $user->last_name }}</p>

    <h2>Calificaciones</h2>
    <table>
        <thead>
            <tr>
                <th>Materia</th>
                <th>Descripción</th>
                <th>Calificación</th>
                <th>Créditos</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($materias as $materia)
                <tr>
                    <td>{{ $materia->materia_name }}</td>
                    <td>{{ $materia->materia_descripcion }}</td>
                    <td>{{ $materia->calificacion }}</td>
                    <td>{{ $materia->credits }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>