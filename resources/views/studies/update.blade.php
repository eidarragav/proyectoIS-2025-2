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
        <form action="{{route("studies.update", $study->id)}}" method="post">
            @csrf
            @method("PUT")
        
            <div class="mb-3">
                <label for="candidate_id" class="form-label fw-bold">Nombre candidato</label>
                <select name="candidate_id" id="candidate_id" 
                        class="form-select border-0 rounded-3 shadow-sm">
                    <option value="" selected disabled>Seleccione el nombre</option>
                    @foreach ($candidates as $candidate)
                        <option value="{{$candidate->id}}" {{$candidate->name==$study->candidate->name ? 'selected' : ''}}>{{$candidate->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="study_level" class="form-label fw-bold">Nivel de estudios</label>
                <select name="study_level" id="study_level" 
                        class="form-select border-0 rounded-3 shadow-sm">
                    <option value="" selected disabled>Seleccione el nivel de estudio</option>
                    <option value="primary" {{$study->study_level=='primary' ? 'selected' : ''}}>Primaria</option>
                    <option value="middle_school" {{$study->study_level=='middle_school' ? 'selected' : ''}}>Media basica</option>
                    <option value="high_school" {{$study->study_level=='high_school' ? 'selected' : ''}}>Bachiller</option>
                    <option value="technical" {{$study->study_level=='technical' ? 'selected' : ''}}>Tecnico</option>
                    <option value="technologist" {{$study->study_level=='technologist' ? 'selected' : ''}}>Tecnologo</option>
                    <option value="undergraduate" {{$study->study_level=='undergraduate' ? 'selected' : ''}}>Pregrado</option>
                    <option value="postgraduate" {{$study->study_level=='postgraduate' ? 'selected' : ''}}>Posgrado</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="institution" class="form-label fw-bold">Institution</label>
                <input type="text" name="institution" id="institution" value="{{$study->institution}}"
                       class="form-control  border-0 rounded-3 shadow-sm" placeholder="Ingrese la institucion">
            </div>

            <div class="mb-3">
                <label for="study_name" class="form-label fw-bold">Nombre del estudio</label>
                <input type="study_name" name="study_name" value="{{$study->study_name}}"
                       class="form-control border-0 rounded-3 shadow-sm" placeholder="Ingrese el nombre del estudio">
            </div>

            <div class="mb-3">
                <label for="status" class="form-label fw-bold">Estado</label>
                <select name="status" id="status" 
                        class="form-select border-0 rounded-3 shadow-sm">
                    <option value="" selected disabled>Seleccione el estado del estudio</option>
                    <option value="in_progress" {{$study->status=='in_progress' ? 'selected' : ''}}>En curso</option>
                    <option value="finished" {{$study->status=='finished' ? 'selected' : ''}}>Terminado</option>
                </select>
            </div>
            
            <div class="mb-3">
                <label for="start_date" class="form-label fw-bold">Fecha de inicio</label>
                <input type="date" name="start_date" id="start_date" value="{{$study->start_date}}"
                       class="form-control border-0 rounded-3 shadow-sm" placeholder="Ingrese la fecha de inicio">
            </div>

            <div class="mb-3">
                <label for="finish_date" class="form-label fw-bold">Fecha de finalizacion</label>
                <input type="date" name="finish_date" id="finish_date" value="{{$study->finish_date}}"
                       class="form-control border-0 rounded-3 shadow-sm" placeholder="Ingrese la fecha de finalizacion">
            </div>

            <div class="text-center mt-4">
                <button type="submit" class="btn btn-warning px-4 py-2 fw-semibold shadow-sm">
                    <i class="bi bi-check-circle"></i> Guardar Cambios
                </button>
                <a href="{{route("studies.index")}}" class="btn  px-4 py-2 ms-2">
                    <i class="bi bi-arrow-left"></i> Volver
                </a>
            </div>






        </form>
    </div>
</div>


@include("footer")

