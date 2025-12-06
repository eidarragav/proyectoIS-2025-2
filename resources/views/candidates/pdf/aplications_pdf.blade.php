<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Postulaciones de {{ $candidate->name }}</title>
    <style>
        body { font-family: sans-serif; font-size: 12px; margin: 0; padding: 0; }
        h2 { text-align: center; margin-bottom: 20px; }
        .card {
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 12px;
            margin-bottom: 12px;
        }
        .card-header {
            font-weight: bold;
            font-size: 14px;
            margin-bottom: 8px;
        }
        .card-content p {
            margin: 2px 0;
        }
        .badge {
            display: inline-block;
            padding: 3px 6px;
            border-radius: 4px;
            color: #fff;
            font-size: 10px;
            font-weight: bold;
        }
        .sent { background-color: #ffc107; color: #000; }       
        .under_review { background-color: #0dcaf0; color: #000; }
        .selected { background-color: #198754; }               
        .refuted { background-color: #dc3545; }                  
        hr { border: 0; border-top: 1px solid #ccc; margin: 8px 0; }
    </style>
</head>
<body>
    <h2>Postulaciones de {{ $candidate->name }}</h2>

    @foreach($applications as $app)
        <div class="card">
            <div class="card-header">{{ $app->offer->title }} - {{ $app->offer->company->name }}</div>
            <div class="card-content">
                <p><strong>Descripción:</strong> {{ $app->offer->description }}</p>
                <p><strong>Salario:</strong> {{ $app->offer->salary }}</p>
                <p><strong>Modalidad:</strong> {{ $app->offer->work_modality?? 'N/A' }}</p>
                <p><strong>Tipo de contrato:</strong> {{ $app->offer->type_contract ?? 'N/A' }}</p>
                <p><strong>Fecha de postulación:</strong> {{ $app->application_date }}</p>
                <p><strong>Estado:</strong> 
                    <span class="badge {{ $app->status }}">{{ ucfirst(str_replace('_',' ',$app->status)) }}</span>
                </p>
            </div>
        </div>
    @endforeach

</body>
</html>
