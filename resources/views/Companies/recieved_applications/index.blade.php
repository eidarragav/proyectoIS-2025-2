@include('navbar')

<div class="container-xxl bg-white p-0">

    <!-- Header -->
    <div class="container-xxl py-5 bg-dark page-header mb-5">
        <div class="container text-center my-5 pt-5 pb-4">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Postulaciones Recibidas</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb text-uppercase justify-content-center">
                    <li class="breadcrumb-item"><a href="{{ route('company.dashboard') }}">Inicio</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Postulaciones</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Contenido principal -->
    <div class="container-xxl py-5">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center mb-4">
                <h3 class="mb-0">Candidatos postulados</h3>
                <a href="{{ route('company.published_offers') }}" class="btn btn-outline-primary">
                    <i class="fa fa-arrow-left me-2"></i>Volver a ofertas
                </a>
            </div>

            <div class="row g-4">

                @forelse ($applications as $app)
                    @php
                        // Colores por estado
                        $stateColors = [
                            'sent' => 'bg-secondary',
                            'under_review' => 'bg-warning text-dark',
                            'selected' => 'bg-success',
                            'refuted' => 'bg-danger'
                        ];
                    @endphp

                    <div class="col-lg-4 col-md-6 wow fadeInUp">
                        <div class="job-item p-4 border rounded bg-light d-flex flex-column justify-content-between h-100">

                            <div>
                                <div class="d-flex align-items-center mb-3">
                                    <i class="fa fa-user-tie fa-2x text-primary me-3"></i>
                                    <div>
                                        <h5 class="mb-1">{{ $app->candidate->name }}</h5>
                                        <small class="text-muted">{{ $app->offer->title }}</small>
                                    </div>
                                </div>

                                <p class="mb-2">
                                    <i class="fa fa-calendar-alt text-primary me-2"></i>
                                    {{ \Carbon\Carbon::parse($app->application_date)->format('d M Y') }}
                                </p>

                                <p class="mb-2">
                                    <i class="fa fa-info-circle text-primary me-2"></i>
                                    Estado:
                                    <span class="badge {{ $stateColors[$app->status]?? 'bg-secondary' }}">
                                        {{ ucfirst(str_replace('_',' ', $app->status)) }}
                                    </span>
                                </p>
                            </div>

                            <button class="btn btn-outline-primary mt-3 w-100"
                                    data-bs-toggle="modal"
                                    data-bs-target="#candidateModal{{ $app->id }}">
                                Ver candidato
                            </button>
                        </div>
                    </div>

                @empty
                    <p class="text-center text-muted">No hay postulaciones recibidas.</p>
                @endforelse

            </div>
        </div>
    </div>
</div>


<!-- Modales dinámicos -->
@foreach ($applications as $app)
<div class="modal fade" id="candidateModal{{ $app->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">

            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title">Perfil de {{ $app->candidate->name }}</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">

                <p><strong>Oferta aplicada:</strong> {{ $app->offer->title }}</p>
                <p><strong>Teléfono:</strong> {{ $app->candidate->phone ?? 'No registrado' }}</p>
                <p><strong>Ciudad:</strong> {{ $app->candidate->city ?? 'No registrado' }}</p>

                <hr>

                <h6>Resumen profesional</h6>
                <p>{{ $app->candidate->description ?? 'El candidato no ha agregado un resumen.' }}</p>

                <hr>

                @if(isset($app->candidate->study))
                    <h6>Estudios</h6>
                    <ul>
                        @foreach ($app->candidate->study as $study)
                            <li>{{ $study->study_name }} - {{ $study->institution }} - {{$study->status == 'finished' ? 'Terminado' : 'En curso'}}</li>
                        @endforeach
                    </ul>
                @endif

                @if(isset($app->candidate->experience))
                    <h6>Experiencia laboral</h6>
                    <ul>
                        @foreach ($app->candidate->experience as $exp)
                            <li>Cargo: {{ $exp->job_title }} en {{ $exp->company }}, cumpliendo con {{$exp->functions}} durante {{$exp->start_date}} - {{$exp->finish_date}}</li>
                        @endforeach
                    </ul>
                @endif

            </div>

            <div class="modal-footer justify-content-between">
                <div>
                    <a href="{{ route('company.applications.edit', $app->id) }}" class="btn btn-warning">
                        <i class="fa fa-edit me-1"></i>Editar
                    </a>
                </div>
                <button class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>

        </div>
    </div>
</div>
@endforeach

@include('footer')
