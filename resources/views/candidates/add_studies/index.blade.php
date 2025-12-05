@include("navbar")

<!-- Hero principal -->
<div class="container mt-5">
    <div class="card shadow-lg rounded-4 p-4">
        <h3 class="text-center mb-4">Estudios</h3>

        <form action="{{ route('studies.store') }}" method="post">
            @csrf

            @if(isset($candidate))
                <div class="mb-3">
                    <label class="form-label fw-bold">Candidato</label>
                    <input type="text" class="form-control" value="{{ $candidate->name }}" disabled>
                    <input type="hidden" name="candidate_id" value="{{ $candidate->id }}">
                </div>
            @else
                <div class="mb-3">
                    <label for="candidate_id" class="form-label fw-bold">Nombre candidato</label>
                    <select name="candidate_id" id="candidate_id" class="form-select border-0 rounded-3 shadow-sm">
                        <option value="" selected disabled>Seleccione el nombre</option>
                        @foreach ($candidates as $c)
                            <option value="{{ $c->id }}" {{ old('candidate_id') == $c->id ? 'selected' : '' }}>
                                {{ $c->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            @endif

            {{-- Resto del formulario (igual al tuyo original) --}}
            <div class="mb-3">
                <label for="study_level" class="form-label fw-bold">Nivel de estudios</label>
                <select name="study_level" id="study_level" class="form-select border-0 rounded-3 shadow-sm">
                    <option value="" selected disabled>Seleccione el nivel de estudio</option>
                    <option value="primary">Primaria</option>
                    <option value="middle_school">Media basica</option>
                    <option value="high_school">Bachiller</option>
                    <option value="technical">Técnico</option>
                    <option value="certification">Certificación</option>
                    <option value="technologist">Tecnólogo</option>
                    <option value="undergraduate">Pregrado</option>
                    <option value="postgraduate">Posgrado</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="institution" class="form-label fw-bold">Institución</label>
                <input type="text" name="institution" id="institution" class="form-control border-0 rounded-3 shadow-sm" placeholder="Ingrese la institucion" value="{{ old('institution') }}">
            </div>

            <div class="mb-3">
                <label for="study_name" class="form-label fw-bold">Nombre del estudio</label>
                <input type="text" name="study_name" id="study_name" class="form-control border-0 rounded-3 shadow-sm" placeholder="Ingrese el nombre del estudio" value="{{ old('study_name') }}">
            </div>

            <div class="mb-3">
                <label for="status" class="form-label fw-bold">Estado</label>
                <select name="status" id="status" class="form-select border-0 rounded-3 shadow-sm">
                    <option value="" selected disabled>Seleccione el estado del estudio</option>
                    <option value="in_progress">En curso</option>
                    <option value="finished">Terminado</option>
                </select>
            </div>
            
            <div class="mb-3">
                <label for="start_date" class="form-label fw-bold">Fecha de inicio</label>
                <input type="date" name="start_date" id="start_date" class="form-control border-0 rounded-3 shadow-sm" value="{{ old('start_date') }}">
            </div>

            <div class="mb-3">
                <label for="finish_date" class="form-label fw-bold">Fecha de finalizacion</label>
                <input type="date" name="finish_date" id="finish_date" class="form-control border-0 rounded-3 shadow-sm" value="{{ old('finish_date') }}">
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

