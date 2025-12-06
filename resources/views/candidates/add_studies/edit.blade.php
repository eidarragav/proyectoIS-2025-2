@include("navbar")

<!-- Hero principal -->
<div class="container-fluid bg-primary py-5 mb-5 hero-header">
  <div class="container py-5 text-center">
    <h1 class="display-3 text-white mb-4 animated slideInDown">Editar </h1>
  </div>
</div>

<!-- EDITAR ESTUDIOS -->

<div class="container mt-5">
    <div class="card  shadow-lg rounded-4 p-4">
        <h3 class="text-center mb-4">Editar Estudios</h3>
        <form action="{{ route('candidateStudies.update', $study->id) }}" method="post">
            @csrf
            @method("PUT")

            <!-- Candidato: usar el candidato del usuario logeado (no preguntar) -->
            <div class="mb-3">
                <label class="form-label fw-bold">Candidato</label>
                <input type="text" class="form-control" value="{{ $candidate->name ?? '---' }}" disabled>
                <input type="hidden" name="candidate_id" value="{{ $candidate->id ?? '' }}">
            </div>

            <div class="mb-3">
                <label for="study_level" class="form-label fw-bold">Nivel de estudios</label>
                <select name="study_level" id="study_level" 
                        class="form-select border-0 rounded-3 shadow-sm">
                    <option value="" disabled>Seleccione el nivel de estudio</option>
                    <option value="primary" {{ old('study_level', $study->study_level) == 'primary' ? 'selected' : '' }}>Primaria</option>
                    <option value="middle_school" {{ old('study_level', $study->study_level) == 'middle_school' ? 'selected' : '' }}>Media básica</option>
                    <option value="high_school" {{ old('study_level', $study->study_level) == 'high_school' ? 'selected' : '' }}>Bachiller</option>
                    <option value="technical" {{ old('study_level', $study->study_level) == 'technical' ? 'selected' : '' }}>Técnico</option>
                    <option value="technologist" {{ old('study_level', $study->study_level) == 'technologist' ? 'selected' : '' }}>Tecnólogo</option>
                    <option value="undergraduate" {{ old('study_level', $study->study_level) == 'undergraduate' ? 'selected' : '' }}>Pregrado</option>
                    <option value="postgraduate" {{ old('study_level', $study->study_level) == 'postgraduate' ? 'selected' : '' }}>Posgrado</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="institution" class="form-label fw-bold">Institución</label>
                <input type="text" name="institution" id="institution" value="{{ old('institution', $study->institution) }}"
                       class="form-control  border-0 rounded-3 shadow-sm" placeholder="Ingrese la institución">
            </div>

            <div class="mb-3">
                <label for="study_name" class="form-label fw-bold">Nombre del estudio</label>
                <input type="text" name="study_name" id="study_name" value="{{ old('study_name', $study->study_name) }}"
                       class="form-control border-0 rounded-3 shadow-sm" placeholder="Ingrese el nombre del estudio">
            </div>

            <div class="mb-3">
                <label for="status" class="form-label fw-bold">Estado</label>
                <select name="status" id="status" class="form-select border-0 rounded-3 shadow-sm">
                    <option value="" disabled>Seleccione el estado del estudio</option>
                    <option value="in_progress" {{ old('status', $study->status) == 'in_progress' ? 'selected' : '' }}>En curso</option>
                    <option value="finished" {{ old('status', $study->status) == 'finished' ? 'selected' : '' }}>Terminado</option>
                </select>
            </div>
            
            <div class="mb-3">
                <label for="start_date" class="form-label fw-bold">Fecha de inicio</label>
                <input type="date" name="start_date" id="start_date" value="{{ old('start_date', $study->start_date) }}"
                       class="form-control border-0 rounded-3 shadow-sm">
            </div>

            <div class="mb-3">
                <label for="finish_date" class="form-label fw-bold">Fecha de finalizacion</label>
                <input type="date" name="finish_date" id="finish_date" value="{{ old('finish_date', $study->finish_date) }}"
                       class="form-control border-0 rounded-3 shadow-sm">
            </div>

            <div class="text-center mt-4">
                <button type="submit" class="btn btn-warning px-4 py-2 fw-semibold shadow-sm">
                    <i class="bi bi-check-circle"></i> Guardar Cambios
                </button>
                <a href="{{ route('candidate.dashboard') }}" class="btn  px-4 py-2 ms-2">
                    <i class="bi bi-arrow-left"></i> Volver
                </a>
            </div>

        </form>
    </div>
</div>

@include("footer")
