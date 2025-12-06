<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Hoja de Vida</title>

    <style>
        body {
            font-family: sans-serif;
            font-size: 12px;
            margin: 20px;
        }

        h1, h2, h3 {
            margin: 5px 0;
            padding: 0;
        }

        .section-title {
            background: #f1f1f1;
            padding: 6px 10px;
            font-weight: bold;
            margin-top: 20px;
            border-left: 4px solid #555;
        }

        .info-box {
            margin-top: 10px;
            padding: 10px;
            border: 1px solid #ccc;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 8px;
        }

        table th, table td {
            border: 1px solid #bbb;
            padding: 6px;
            font-size: 11px;
        }

        table th {
            background: #eee;
            text-align: left;
        }
    </style>
</head>

<body>

    <!-- ENCABEZADO -->
    <h1 style="text-align:center;">HOJA DE VIDA</h1>

    <br>

    <!-- INFO GENERAL -->
    <div class="section-title">Datos Generales</div>

    <div class="info-box">
        <p><strong>Nombre completo:</strong> {{$candidate->name}}</p>
        <p><strong>Documento:</strong> {{ $candidate->document}}</p>
        <p><strong>Fecha de nacimiento:</strong> {{ $candidate->birthdate}}</p>
        <p><strong>Telefono:</strong> {{ $candidate->phone}}</p>
        <p><strong>Ubicacion:</strong> {{ $candidate->deparment}}, {{$candidate->city}}</p>
        <p><strong>Titulo:</strong> {{ $candidate->job_title}}</p>
        <p><strong>Puede viajar:</strong> {{ $candidate->can_travel}}</p>
    </div>

    <div class="section-title">Perfil Profesional</div>

    <div class="info-box">
        <p style="text-align: justify;">
            {{ $candidate->description }}
        </p>
    </div>



    <!-- EXPERIENCIA -->
    <div class="section-title">Experiencia Laboral</div>

    <table>
        <thead>
            <tr>
                <th>Empresa</th>
                <th>Cargo</th>
                <th>Fecha Inicio</th>
                <th>Fecha Fin</th>
                <th>Estado</th>
                <th>Descripción</th>
            </tr>
        </thead>
        <tbody>
            @foreach($experiences as $experience)
                <tr>
                    <td>{{ $experience->company }}</td>
                    <td>{{ $experience->job_title }}</td>
                    <td>{{ $experience->start_date }}</td>
                    <td>{{ $experience->finish_date }}</td>
                    <td>{{ $experience->status }}</td>
                    <td>{{ $experience->functions }}</td>
                </tr>
            @endforeach

            @if(empty($experiences))
                <tr>
                    <td colspan="5" style="text-align:center;">No hay experiencias registradas</td>
                </tr>
            @endif
        </tbody>
    </table>


    <!-- EDUCACIÓN -->
    <div class="section-title">Estudios y Formación</div>

    <table>
        <thead>
            <tr>
                <th>Institución</th>
                <th>Título</th>
                <th>Nivel</th>
                <th>Estado</th>
                <th>Fecha de Iinicio</th>
                <th>Fecha de Finalización</th>
            </tr>
        </thead>
        <tbody>
            @foreach($studies as $study)
                <tr>
                    <td>{{ $study->institution }}</td>
                    <td>{{ $study->study_name }}</td>
                    <td>{{ $study->study_level }}</td>
                    <td>{{ $study->status }}</td>
                    <td>{{ $study->start_date }}</td>
                    <td>{{ $study->finish_date }}</td>
                    
                </tr>
            @endforeach

            @if(empty($studies))
                <tr>
                    <td colspan="4" style="text-align:center;">No hay estudios registrados</td>
                </tr>
            @endif
        </tbody>
    </table>

</body>
</html>
