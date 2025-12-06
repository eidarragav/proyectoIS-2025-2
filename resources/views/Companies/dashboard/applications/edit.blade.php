@include("navbar")

<!-- Hero principal -->
<div class="container-fluid bg-primary py-5 mb-5 hero-header">
  <div class="container py-5 text-center">
    <h1 class="display-3 text-white mb-4 animated slideInDown">Editar</h1>
  </div>
</div>

<!-- EDITAR POSTULACIÓN -->
<div class="container mt-5">
    <div class="card shadow-lg rounded-4 p-4">
        <h3 class="text-center mb-4">Editar Postulación</h3>

        <form action="{{ route('company.applications.update', $application->id) }}" method="post">
            @csrf
            @method("PUT")

            <!-- Nombre del candidato (solo mostrar) -->
            <div class="mb-3">
                <label class="form-label fw-bold">Nombre del candidato</label>
                <input type="text" 
                       class="form-control border-0 rounded-3 shadow-sm" 
                       value="{{ $application->candidate->name }}" 
                       disabled>
            </div>

            <!-- Oferta (solo mostrar) -->
            <div class="mb-3">
                <label class="form-label fw-bold">Oferta</label>
                <input type="text" 
                       class="form-control border-0 rounded-3 shadow-sm"
                       value="{{ $application->offer->title }}" 
                       disabled>
            </div>

            <!-- Estado (único select editable) -->
            <div class="mb-3">
                <label for="status" class="form-label fw-bold">Estado</label>
                <select name="status" id="status" 
                        class="form-select border-0 rounded-3 shadow-sm">
                    <option value="sent"         {{ $application->status=='sent' ? 'selected' : '' }}>Enviada</option>
                    <option value="under_review" {{ $application->status=='under_review' ? 'selected' : '' }}>En proceso</option>
                    <option value="selected"     {{ $application->status=='selected' ? 'selected' : '' }}>Seleccionado</option>
                    <option value="refuted"      {{ $application->status=='refuted' ? 'selected' : '' }}>Rechazado</option>
                </select>
            </div>

            <!-- Fecha (solo mostrar) -->
            <div class="mb-3">
                <label class="form-label fw-bold">Fecha de postulación</label>
                <input type="date" 
                       class="form-control border-0 rounded-3 shadow-sm" 
                       value="{{ $application->application_date }}" 
                       disabled>
            </div>

            <!-- Botones -->
            <div class="text-center mt-4">
                <button type="submit" class="btn btn-warning px-4 py-2 fw-semibold shadow-sm">
                    <i class="bi bi-check-circle"></i> Guardar Cambios
                </button>

                <a href="{{ route('company.dashboard') }}" class="btn px-4 py-2 ms-2">
                    <i class="bi bi-arrow-left"></i> Volver
                </a>
            </div>

        </form>
    </div>
</div>

@include("footer")
