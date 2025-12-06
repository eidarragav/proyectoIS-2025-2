@include("navbar")

<!-- Hero principal -->
<div class="container-fluid bg-primary py-5 mb-5 hero-header">
  <div class="container py-5 text-center">
    <h1 class="display-3 text-white mb-4 animated slideInDown">Editar </h1>
  </div>
</div>

<!-- EDITAR EXPERIENCIAS -->

<div class="container mt-5">
    <div class="card  shadow-lg rounded-4 p-4">
        <h3 class="text-center mb-4">Editar Experiencia</h3>
        <form action="{{ route('candidateExperiences.update', $experience->id) }}" method="post">
            @csrf
            @method("PUT")

            <!-- Candidato: usar el candidato del usuario logeado -->
            <div class="mb-3">
                <label class="form-label fw-bold">Candidato</label>

                {{-- Mostrar nombre del candidato (disabled) --}}
                <input type="text" class="form-control" value="{{ $candidate->name ?? '---' }}" disabled>

                {{-- Enviar el candidate_id oculto para que el update lo reciba --}}
                <input type="hidden" name="candidate_id" value="{{ $candidate->id ?? '' }}">
            </div>

            <div class="mb-3">
                <label for="job_title" class="form-label fw-bold">Cargo</label>
                <input type="text" name="job_title" id="job_title" value="{{ old('job_title', $experience->job_title) }}"
                       class="form-control  border-0 rounded-3 shadow-sm" placeholder="Ingrese el cargo">
            </div>

            <div class="mb-3">
                <label for="company" class="form-label fw-bold">Empresa</label>
                <input type="text" name="company" id="company" value="{{ old('company', $experience->company) }}"
                       class="form-control  border-0 rounded-3 shadow-sm" placeholder="Ingrese la empresa">
            </div>

            <div class="mb-3">
                <label for="functions" class="form-label fw-bold">Funciones</label>
                <input type="text" name="functions" id="functions" value="{{ old('functions', $experience->functions) }}"
                       class="form-control  border-0 rounded-3 shadow-sm" placeholder="Ingrese las funciones">
            </div>

            <div class="mb-3">
                <label for="status" class="form-label fw-bold">Estado</label>
                <select name="status" id="status" class="form-select border-0 rounded-3 shadow-sm">
                    <option value="" disabled>Seleccione el estado</option>
                    <option value="active" {{ old('status', $experience->status) == 'active' ? 'selected' : '' }}>Activa</option>
                    <option value="finished" {{ old('status', $experience->status) == 'finished' ? 'selected' : '' }}>Terminado</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="start_date" class="form-label fw-bold">Fecha de inicio</label>
                <input type="date" name="start_date" id="start_date" value="{{ old('start_date', $experience->start_date) }}"
                       class="form-control border-0 rounded-3 shadow-sm" placeholder="Ingrese la fecha de inicio">
            </div>

            <div class="mb-3">
                <label for="finish_date" class="form-label fw-bold">Fecha de finalizacion</label>
                <input type="date" name="finish_date" id="finish_date" value="{{ old('finish_date', $experience->finish_date) }}"
                       class="form-control border-0 rounded-3 shadow-sm" placeholder="Ingrese la fecha de finalizacion">
            </div>

            <div class="text-center mt-4">
                <button type="submit" class="btn btn-warning px-4 py-2 fw-semibold shadow-sm">
                    <i class="bi bi-check-circle"></i> Guardar Cambios
                </button>
                <a href="{{ route('experiences.index') }}" class="btn  px-4 py-2 ms-2">
                    <i class="bi bi-arrow-left"></i> Volver
                </a>
            </div>
        </form>
    </div>
</div>

@include("footer")
