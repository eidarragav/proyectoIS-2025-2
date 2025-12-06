@include('navbar')

<div class="container-xxl bg-white p-0">
    <!-- Header -->
    <div class="container-xxl py-5 bg-dark page-header mb-5">
        <div class="container text-center my-5 pt-5 pb-4">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Mi Perfil Profesional</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb text-uppercase justify-content-center">
                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Perfil</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Contenido principal -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row align-items-center mb-5">
                <div class="col-md-8 wow fadeInLeft" data-wow-delay="0.1s">

    
                    <!-- Información del candidato -->
                    <div>
                        <h3 class="mb-3">Información del candidato</h3>
                        <p><strong>Nombre:</strong> {{$candidate->name ?? "---"}}</p>
                        <p><strong>Teléfono:</strong> {{$candidate->phone ?? "---"}}</p>
                        <p><strong>Ubicación:</strong> {{$candidate->city ?? "---"}}</p>
                        <p><strong>Descripción:</strong> {{$candidate->description ?? "---"}}</p>
                        
                    </div>
                    

                </div>

                <div class="col-md-4 text-center wow fadeInRight" data-wow-delay="0.2s">
                
                    <!-- Logo actual -->
                        <div class="text-center mb-3" id="imgAvatar">
                            <!-- Cargar el avatar guardado al cargar la página -->
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
            
                        <a href="{{ route('candidate.profile.edit') }}" class="btn btn-success">Editar información</a>
                </div>
            </div>

            <!-- Sección de resumen general -->
            <h3 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Resumen general</h3>
            <div class="row g-4 mb-4">
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-light rounded p-4 text-center">
                        <i class="fa fa-3x fa-briefcase text-primary mb-3"></i>
                        <h5>Ofertas postuladas</h5>
                        <p class="mb-0">{{$sent}}</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="bg-light rounded p-4 text-center">
                        <i class="fa fa-3x fa-clock text-primary mb-3"></i>
                        <h5>Postulaciones en revisión</h5>
                        <p class="mb-0">{{$under_review}}</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="bg-light rounded p-4 text-center">
                        <i class="fa fa-3x fa-check text-primary mb-3"></i>
                        <h5>Ofertas aceptadas</h5>
                        <p class="mb-0">{{$selected}}</p>
                    </div>
                </div>
            </div>

            <div class="text-center mb-5">
                <a href="{{route("candidate.show_applications")}}" class="btn btn-outline-primary">Ver más</a>
                <a href="{{route("candidate.applications.pdf")}}" class="btn btn-outline-primary">Descargar postulaciones</a>
            </div>

            <div> 
                <div id="applicationsChart" style="height: 400px;"></div>

                <script>
                    const data = @json($applicationsPerMonth);

                    const labels = data.map(item => item.month_name);
                    const values = data.map(item => item.total);

                    const trace = {
                        x: labels,
                        y: values,
                        type: 'bar'
                    };

                    const layout = {
                        title: 'Postulaciones por mes',
                        xaxis: { title: 'Mes' },
                        yaxis: { title: 'Cantidad de postulaciones' }
                    };

                    Plotly.newPlot('applicationsChart', [trace], layout);
                </script>
            </div>
        

            <!-- Sección de estudios -->
            <div class="mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h3>Mis estudios</h3>
                    <a href="{{ route('candidates.studies.create', $candidate->id) }}" class="btn btn-primary">Agregar estudio</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered align-middle">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th>Título</th>
                                <th>Institución</th>
                                <th>Nivel</th>
                                <th>Estado</th>
                                <th>Fecha Inicio</th>
                                <th>Fecha fin</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($studies as $study)
                    <tr>
                        <td>{{$study->study_name}}</td>
                        <td>{{$study->institution}}</td>
                        <td>{{$study->study_level}}</td>
                        <td>{{$study->status}}</td>
                        <td>{{$study->start_date}}</td>
                        <td>{{$study->finish_date}}</td>
        
                        <td><a href="{{route('candidate.editStudiesCandidate', $study->id)}}" class="btn btn-warning btn-sm px-3">
                             <i class="bi bi-pencil-square"></i> Editar</a>
                        </td>
                        <td>
                            <form action="{{route("candidateStudies.destroy", $study->id)}}" method="post">
                                @csrf
                                @method("DELETE")
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

            <!-- Sección de experiencia laboral -->
            <div class="mb-5 wow fadeInUp" data-wow-delay="0.2s">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h3>Mi experiencia laboral</h3>
                    <a href="{{ route('candidates.experiences.create', $candidate->id) }}" class="btn btn-primary">Agregar experiencia</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered align-middle">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th>Cargo</th>
                                <th>Empresa</th>
                                <th>Funciones</th>
                                <th>Estado</th>
                                <th>Inicio</th>
                                <th>Finalización</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse ($experiences as $experience)
                                <tr>
                                    <td>{{ $experience->job_title }}</td>
                                    <td>{{ $experience->company }}</td>
                                    <td>{{ $experience->functions }}</td>
                                    <td>{{ $experience->status }}</td>
                                    <td>{{ $experience->start_date }}</td>
                                    <td>{{ $experience->finish_date }}</td>

                                    <td>
                                        <a href="{{ route('candidates.editExperienceCandidate', $experience->id) }}"
                                        class="btn btn-warning btn-sm px-3">
                                            <i class="bi bi-pencil-square"></i> Editar
                                        </a>
                                    </td>

                                    <td>
                                        <form action="{{ route('candidateExperiences.destroy', $experience->id) }}" 
                                            method="POST">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" 
                                                    class="btn btn-danger btn-sm px-3">
                                                <i class="bi bi-trash"></i> Eliminar
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="9" class="text-center">No hay experiencias registradas.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                </div>
            </div>

        </div>
    </div>
</div>

@include('footer')

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