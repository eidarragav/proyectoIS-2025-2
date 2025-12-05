<!-- Vista de ofertas dinámica -->

@include("navbar")

<div class="container-fluid bg-primary py-5 mb-5 hero-header">
  <div class="container py-5 text-center">
    <h1 class="display-3 text-white mb-4 animated slideInDown">Mis Postulaciones</h1>
  </div>
</div>

<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4">

            @foreach ($applications as $application)
                <div class="col-lg-4 col-md-6 wow fadeInUp">
                    <div class="job-item p-4 border rounded bg-light">
                        <div class="d-flex align-items-center mb-3">
                            <i class="fa fa-briefcase fa-2x text-primary me-3"></i>
                            <div>
                                <h5 class="mb-1">{{ $application->offer->title }}</h5>
                                <small class="text-muted">{{ $application->offer->company->name }}</small>
                            </div>
                        </div>

                        <p class="mb-2"><i class="fa fa-map-marker-alt text-primary me-2"></i>{{ $application->offer->work_modality }}</p>
                        <p class="mb-2"><i class="fa fa-clock text-primary me-2"></i>{{ $application->offer->type_contract }}</p>
                        <p class="mb-3"><i class="fa fa-dollar-sign text-primary me-2"></i>{{ $application->offer->salary }}</p>

                        <button class="btn btn-outline-primary w-100" data-bs-toggle="modal" data-bs-target="#applicationModal{{ $application->id }}">
                            Ver más
                        </button>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>

@foreach ($applications as $application)
<div class="modal fade" id="applicationModal{{ $application->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">

            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title">{{ $application->offer->title }}</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <p><strong>Empresa:</strong> {{ $application->offer->company->name }}</p>
                <p><strong>Ubicación:</strong> {{ $application->offer->company->city }}</p>
                <p><strong>Modalidad:</strong> {{ $application->offer->type_contract }}</p>
                <p><strong>Salario:</strong> {{ $application->offer->salary }}</p>
                <hr>

                <h6>Descripción del cargo</h6>
                <p>{{ $application->offer->description }}</p>
            </div>

            <div class="modal-footer">
                <button class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>

        </div>
    </div>
</div>
@endforeach

@include("footer")