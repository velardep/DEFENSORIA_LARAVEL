<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Reporte de Victimas</title>
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
    <h2>Reporte de Victimas</h2>
    <table>
        <thead>
            <tr>
       
                                        
                                        <th >Nombre</th>
                                        <th >Ap Paterno</th>
                                        <th >Ap Materno</th>
                                        <th >Sexo</th>
                                        <th >Fecha Nacimiento</th>
                                        <th >Edad</th>
                                        
                                        <th >Estado Civil</th>
                                        <th >Celular</th>
                                        <th >Rel Victima Agresor</th>
                                        <th >Hijos</th>
                                        
                
            </tr>
        </thead>
        <tbody>
            @foreach($victimas as $victima)
                <tr>

                
                                            
										<td >{{ $victima->nombre }}</td>
										<td >{{ $victima->ap_paterno }}</td>
										<td >{{ $victima->ap_materno }}</td>
										<td >{{ $victima->sexo }}</td>
										
										<td >{{ $victima->fecha_nacimiento }}</td>
										<td >{{ $victima->edad }}</td>
									
										<td >{{ $victima->estado_civil }}</td>
                                        <td >{{ $victima->celular }}</td>
										<td >{{ $victima->rel_victima_agresor }}</td>
										<td >{{ $victima->hijos }}</td>
										
                    
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
