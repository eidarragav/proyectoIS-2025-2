@include('navbar')

<div class="container-xxl bg-white p-0">

    <!-- Header -->
    <div class="container-xxl py-5 bg-dark page-header mb-5">
        <div class="container text-center my-5 pt-5 pb-4">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Panel de Empresa</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb text-uppercase justify-content-center">
                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Dashboard</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Contenido principal -->
    <div class="container-xxl py-5">
        <div class="container">

            <!-- Resumen general -->
            <h3 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Resumen general de postulaciones</h3>
            <div class="row g-4 mb-4">
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-light rounded p-4 text-center">
                        <i class="fa fa-3x fa-users text-primary mb-3"></i>
                        <h5>Total postulaciones</h5>
                        <p class="mb-0">{{ $totalPostulaciones }}</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="bg-light rounded p-4 text-center">
                        <i class="fa fa-3x fa-clock text-primary mb-3"></i>
                        <h5>En revisión</h5>
                        <p class="mb-0">{{ $postulacionesRevision }}</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="bg-light rounded p-4 text-center">
                        <i class="fa fa-3x fa-check text-primary mb-3"></i>
                        <h5>Aceptadas</h5>
                        <p class="mb-0">{{ $postulacionesAceptadas }}</p>
                    </div>
                </div>
            </div>

            <div class="text-center mb-5">
                <a href="{{route("company.recieved_applications")}}" class="btn btn-outline-primary">Ver más</a>
            </div>

            <div>
                <div id="applicationsChart"></div>

                <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>

                <script>
                    const dataRaw = @json($applicationsPerMonth);
                    // labels (meses) y values (totales)
                    const labels = dataRaw.map(item => item.month_name);
                    const values = dataRaw.map(item => Number(item.total)); // asegurar números

                    const trace = {
                        x: labels,
                        y: values,
                        type: 'scatter',     // 'bar' para barras
                        mode: 'lines+markers',
                        marker: { size: 6 }
                    };

                    const layout = {
                        title: "Postulaciones recibidas por mes",
                        xaxis: { title: "Mes" },
                        yaxis: { title: "Número de postulaciones", rangemode: 'nonnegative' },
                        margin: { t: 50, b: 80 }
                    };

                    Plotly.newPlot('applicationsChart', [trace], layout, {responsive: true});
                </script>
            </div>

            <!-- Información de la empresa -->
            <div class="row align-items-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-md-8">
                    <div class="bg-light rounded p-4">
                        <h3>Información de la empresa</h3>

                        <p><strong>Nombre:</strong> {{ $company->name ?? '' }}</p>
                        <p><strong>Sector:</strong> {{ $company->sector ?? '' }}</p>
                        <p><strong>Teléfono:</strong> {{ $company->phone ?? '' }}</p>
                        <p><strong>Ciudad:</strong> {{ $company->city ?? '' }}</p>
                        <p><strong>Dirección:</strong> {{ $company->adress ?? '' }}</p>
                        <p><strong>Descripción:</strong> {{ $company->description ?? '' }}</p>
                        <p><strong>Sitio web:</strong> {{ $company->website ?? '' }}</p>
                    </div> <br>
                </div>
                <div class="col-md-4 text-center">
                    <!-- Logo actual -->
                        
                        <div  id="imgAvatar" class="text-center mb-3" ">
                            <!-- Cargar logo actual -->    
                        </div> 

                        <!-- Botón para desplegar dropdown -->
                        <div class="text-center mb-3">
                            <button type="button" class="btn btn-primary" id="toggleDropdown">Cambiar logo</button>
                        </div>

                        <!-- Dropdown con avatares -->
                        <div id="avatarDropdown" class="d-none border rounded p-3 mb-3"
                             style="max-height: 250px; overflow-y: auto; display:grid; grid-template-columns: repeat(auto-fill, 80px); gap:10px; justify-content:center;">
                        </div>

                        <div id="message" class="mb-2"></div>
                    <a href="{{ route('company.profile') }}" class="btn btn-primary btn-lg mt-3">Editar información</a>
                </div>
            </div>

            <!-- Ofertas publicadas -->
            <div class="mb-5 wow fadeInUp" data-wow-delay="0.2s">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h3>Ofertas publicadas</h3>
                    <a href="{{route('company.offer')}}" class="btn btn-sm btn-success">
                        <i class="fa fa-plus me-1"></i> Publicar oferta
                    </a>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered align-middle">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th scope="col">Titulo</th>
                                <th scope="col">Descripción</th>
                                <th scope="col">Salario</th>
                                <th scope="col">Modalidad</th>
                                <th scope="col">Tipo Contrato</th>
                                <th scope="col" colspan="2">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($offers as $offer)
                                <tr>
                                    <td>{{$offer->title}}</td>
                                    <td>{{$offer->description}}</td>
                                    <td>{{$offer->salary}}</td>
                                    <td>{{$offer->work_modality}}</td>
                                    <td>{{$offer->type_contract}}</td>
                                    <td>
                                        <a href={{ route('company.offers.edit', $offer->id) }} class="btn btn-warning btn-sm px-3">
                                            <i class="bi bi-pencil-square"></i> Editar
                                        </a>
                                    </td>
                                    <td>
                                        <form action="{{route('company.delete_offer', $offer->id)}} " method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm px-3">
                                                <i class="bi bi-trash"></i> Eliminar
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Postulaciones recibidas -->
            <div class="mb-5 wow fadeInUp" data-wow-delay="0.3s">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h3>Postulaciones recibidas</h3>
                    <a href="{{route("company.recieved_applications")}}" class="btn btn-sm btn-outline-primary">
                        Ver todas
                    </a>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered align-middle">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th>Oferta</th>
                                <th>Candidato</th>
                                <th>Fecha postulación</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($applicationsInOffer as $application)
                                <tr>
                                    <td>{{$application->offer->title}}</td>
                                    <td>{{$application->candidate->name}}</td>
                                    <td>{{$application->application_date}}</td>
                                    <td>
                                        @if($application->status == 'Aceptada')
                                            <span class="badge bg-success">{{$application->status}}</span>
                                        @elseif($application->status == 'En revisión')
                                            <span class="badge bg-warning text-dark">{{$application->status}}</span>
                                        @elseif($application->status == 'Rechazada')
                                            <span class="badge bg-danger">{{$application->status}}</span>
                                        @else
                                            <span class="badge bg-secondary">{{$application->status}}</span>
                                        @endif
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-info me-2" data-bs-toggle="modal" data-bs-target="#candidateModal{{$application->id}}">
                                            <a href="{{route('cv_report', $application->candidate->user_id)}}">Descargar Hoja de vida</a>
                                        </button>
                                        <a href="{{route('company.applications.edit', $application->id)}}" class="btn btn-sm btn-outline-success me-2">Editar</a>
                                        <form action="{{route('company.delete.postulation', $application->id)}}" method="post" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger">Rechazar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>

        </div>
    </div>
</div>


<!-- Script para selector de avatares con DiceBear -->
<script>
    const toggleBtn = document.getElementById('toggleDropdown');
    const dropdown = document.getElementById('avatarDropdown');
    const message = document.getElementById('message');

    toggleBtn.addEventListener('click', () => {
        dropdown.classList.toggle('d-none');
        if (!dropdown.classList.contains('d-none')) {
            cargarAvatares();
        }
    });

    document.addEventListener('DOMContentLoaded', function () {
        cargarAvatarGuardado('{{ Auth::user()->profile_photo }}');
    });

    function cargarAvatarGuardado(id){
    
        let div = document.getElementById("imgAvatar");

        let endPoint = `https://api.dicebear.com/7.x/bottts/svg?seed=${id}`;
        fetch(endPoint)
            .then(function(response){
                return response
            })
            .then(function(data){                
                div.innerHTML+= `<img src="${data.url}" width="150">`;

            })
    }

    async function cargarAvatares() {
        dropdown.innerHTML = '';
        for (let i = 1; i <= 10; i++) {
            const img = document.createElement('img');
            img.src = `https://api.dicebear.com/7.x/bottts/svg?seed=${i}`;
            img.alt = `Avatar ${i}`;
            img.style.width = '80px';
            img.style.cursor = 'pointer';
            img.classList.add('rounded-circle');

            img.addEventListener('click', () => seleccionarAvatar(i));
            dropdown.appendChild(img);
        }
    }

    function seleccionarAvatar(id) {
        fetch('{{ route("user.updatePhoto") }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({ photo_id: id })
        })
        .then(res => res.json())
        .then(data => {
            if (data.success) {
                document.querySelector('div.text-center.mb-3 img').src = `https://api.dicebear.com/7.x/bottts/svg?seed=${id}`;
                message.innerHTML = '<div class="alert alert-success">Avatar actualizado correctamente</div>';
            } else {
                message.innerHTML = '<div class="alert alert-danger">Error al actualizar avatar</div>';
            }
        })
        .catch(() => {
            message.innerHTML = '<div class="alert alert-danger">Error de conexión</div>';
        });
    }
</script>



@include('footer')