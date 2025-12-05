@include("navbar")

<div class="container-fluid bg-primary py-5 mb-5 hero-header">
  <div class="container py-5 text-center">
    <h1 class="display-3 text-white mb-4 animated slideInDown">Experiencias</h1>
  </div>
</div>

<div class="container mt-5">
    <div class="card shadow-lg rounded-4 p-4">
        <h3 class="text-center mb-4">Agregar experiencia</h3>

        <form action="{{ route('experiences.store') }}" method="post">
            @csrf

            {{-- Candidato logeado --}}
            <div class="mb-3">
                <label class="form-label fw-bold">Candidato</label>
                <input type="text" class="form-control" value="{{ $candidate->name }}" disabled>
                <input type="hidden" name="candidate_id" value="{{ $candidate->id }}">
            </div>

            <div class="mb-3">
                <label for="job_title" class="form-label fw-bold">Cargo</label>
                <input type="text" name="job_title" id="job_title"
                       class="form-control border-0 rounded-3 shadow-sm"
                       placeholder="Ingrese el cargo">
            </div>

            <div class="mb-3">
                <label for="company" class="form-label fw-bold">Empresa</label>
                <input type="text" name="company" id="company"
                       class="form-control border-0 rounded-3 shadow-sm"
                       placeholder="Ingrese la empresa">
            </div>

            <div class="mb-3">
                <label for="functions" class="form-label fw-bold">Funciones</label>
                <input type="text" name="functions" id="functions"
                       class="form-control border-0 rounded-3 shadow-sm"
                       placeholder="Ingrese las funciones">
            </div>

            <div class="mb-3">
                <label for="status" class="form-label fw-bold">Estado</label>
                <select name="status" id="status" class="form-select border-0 rounded-3 shadow-sm">
                    <option selected disabled>Seleccione el estado</option>
                    <option value="active">Activa</option>
                    <option value="finished">Terminada</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="start_date" class="form-label fw-bold">Fecha de inicio</label>
                <input type="date" name="start_date" id="start_date"
                       class="form-control border-0 rounded-3 shadow-sm">
            </div>

            <div class="mb-3">
                <label for="finish_date" class="form-label fw-bold">Fecha de finalización</label>
                <input type="date" name="finish_date" id="finish_date"
                       class="form-control border-0 rounded-3 shadow-sm">
            </div>

            <div class="text-center mt-4">
                <button type="submit" class="btn btn-warning px-4 py-2 fw-semibold shadow-sm">
                    <i class="bi bi-check-circle"></i> Guardar 
                </button>

                <a href="{{ url()->previous() }}" class="btn px-4 py-2 ms-2">
                    <i class="bi bi-arrow-left"></i> Volver
                </a>
            </div>
        </form>
    </div>
</div>

@include("footer")