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
        <h3 class="text-center mb-4">Editar Experiencias</h3>
        <form action="{{route("experiences.update", $experience->id)}}" method="post">
            @csrf
            @method("PUT")
        
            <div class="mb-3">
                <label for="candidate_id" class="form-label fw-bold">Nombre candidato</label>
                <select name="candidate_id" id="candidate_id" 
                        class="form-select border-0 rounded-3 shadow-sm">
                    <option value="" selected disabled>Seleccione el nombre</option>
                    @foreach ($candidates as $candidate)
                        <option value="{{$candidate->id}}" {{$candidate->name==$experience->candidate->name ? 'selected' : ''}}>{{$candidate->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="job_title" class="form-label fw-bold">Cargo</label>
                <input type="text" name="job_title" id="job_title" value="{{$experience->job_title}}"
                       class="form-control  border-0 rounded-3 shadow-sm" placeholder="Ingrese el cargo">
            </div>

            <div class="mb-3">
                <label for="company" class="form-label fw-bold">Empresa</label>
                <input type="text" name="company" id="company" value="{{$experience->company}}"
                       class="form-control  border-0 rounded-3 shadow-sm" placeholder="Ingrese la empresa">
            </div>

            <div class="mb-3">
                <label for="functions" class="form-label fw-bold">Funciones</label>
                <input type="text" name="functions" id="functions" value="{{$experience->functions}}"
                       class="form-control  border-0 rounded-3 shadow-sm" placeholder="Ingrese las funciones">
            </div>

            <div class="mb-3">
                <label for="status" class="form-label fw-bold">Estado</label>
                <select name="status" id="status" 
                        class="form-select border-0 rounded-3 shadow-sm">
                    <option value="" selected disabled>Seleccione el estado del estudio</option>
                    <option value="active" {{$experience->status=='active' ? 'selected' : ''}}>Activa</option>
                    <option value="finished" {{$experience->status=='finished' ? 'selected' : ''}}>Terminado</option>
                </select>
            </div>
            
            <div class="mb-3">
                <label for="start_date" class="form-label fw-bold">Fecha de inicio</label>
                <input type="date" name="start_date" id="start_date" value="{{$experience->start_date}}"
                       class="form-control border-0 rounded-3 shadow-sm" placeholder="Ingrese la fecha de inicio">
            </div>

            <div class="mb-3">
                <label for="finish_date" class="form-label fw-bold">Fecha de finalizacion</label>
                <input type="date" name="finish_date" id="finish_date" value="{{$experience->finish_date}}"
                       class="form-control border-0 rounded-3 shadow-sm" placeholder="Ingrese la fecha de finalizacion">
            </div>

            <div class="text-center mt-4">
                <button type="submit" class="btn btn-warning px-4 py-2 fw-semibold shadow-sm">
                    <i class="bi bi-check-circle"></i> Guardar Cambios
                </button>
                <a href="{{route("experiences.index")}}" class="btn  px-4 py-2 ms-2">
                    <i class="bi bi-arrow-left"></i> Volver
                </a>
            </div>






        </form>
    </div>
</div>


@include("footer")

