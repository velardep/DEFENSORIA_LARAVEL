<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Reporte de Casos Emblemáticos</title>
    <style>
        body {
            font-family: sans-serif;
            font-size: 12px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #999;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #eee;
        }
    </style>
</head>
<body>
    <h2>Reporte de Casos Emblemáticos</h2>
    <table>
        <thead>
            <tr>
                <th>Fecha</th>
                <th>Número de Caso</th>
                <th>Cod SLIM</th>
                <th>Nombre Víctima</th>
                <th>Nombre Agresor</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            @foreach($denuncias as $d)
                <tr>
                    <td>{{ $d->fecha }}</td>
                    <td>{{ $d->num_caso }}</td>
                    <td>{{ $d->cod_slim }}</td>
                    <td>{{ $d->victima->nombre ?? 'N/A' }}</td>
                    <td>{{ $d->agresor->nombre ?? 'N/A' }}</td>
                    <td>{{ $d->estado }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
