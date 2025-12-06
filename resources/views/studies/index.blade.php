@include("navbar")

<!-- Hero principal -->
<div class="container-fluid bg-primary py-5 mb-5 hero-header">
  <div class="container py-5 text-center">
    <h1 class="display-3 text-white mb-4 animated slideInDown">Estudios</h1>
  </div>
</div>

<!--Ingresar -->
<div class="container mt-5">
    <div class="card shadow-lg rounded-4 p-4">
        <h3 class="text-center mb-4">Estudios</h3>


        <form action="{{route("studies.store")}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="candidate_id" class="form-label fw-bold">Nombre candidato</label>
                <select name="candidate_id" id="candidate_id" 
                        class="form-select border-0 rounded-3 shadow-sm">
                    <option value="" selected disabled>Seleccione el nombre</option>
                    @foreach ($candidates as $candidate)
                        <option value="{{$candidate->id}}">{{$candidate->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="study_level" class="form-label fw-bold">Nivel de estudios</label>
                <select name="study_level" id="study_level" 
                        class="form-select border-0 rounded-3 shadow-sm">
                    <option value="" selected disabled>Seleccione el nivel de estudio</option>
                    <option value="primary">Primaria</option>
                    <option value="middle_school">Media basica</option>
                    <option value="high_school">Bachiller</option>
                    <option value="technical">Tecnico</option>
                    <option value="certification">Certificacion</option>
                    <option value="technologist">Tecnologo</option>
                    <option value="undergraduate">Pregrado</option>
                    <option value="postgraduate">Posgrado</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="institution" class="form-label fw-bold">Institution</label>
                <input type="text" name="institution" id="institution"
                       class="form-control  border-0 rounded-3 shadow-sm" placeholder="Ingrese la institucion">
            </div>

            <div class="mb-3">
                <label for="study_name" class="form-label fw-bold">Nombre del estudio</label>
                <input type="study_name" name="study_name" 
                       class="form-control border-0 rounded-3 shadow-sm" placeholder="Ingrese el nombre del estudio">
            </div>

            <div class="mb-3">
                <label for="status" class="form-label fw-bold">Estado</label>
                <select name="status" id="status" 
                        class="form-select border-0 rounded-3 shadow-sm">
                    <option value="" selected disabled>Seleccione el estado del estudio</option>
                    <option value="in_progress">En curso</option>
                    <option value="finished">Terminado</option>
                </select>
            </div>
            
            <div class="mb-3">
                <label for="start_date" class="form-label fw-bold">Fecha de inicio</label>
                <input type="date" name="start_date" id="start_date" 
                       class="form-control border-0 rounded-3 shadow-sm" placeholder="Ingrese la fecha de inicio">
            </div>

            <div class="mb-3">
                <label for="finish_date" class="form-label fw-bold">Fecha de finalizacion</label>
                <input type="date" name="finish_date" id="finish_date" 
                       class="form-control border-0 rounded-3 shadow-sm" placeholder="Ingrese la fecha de finalizacion">
            </div>

            <div class="text-center mt-4">
                <button type="submit" class="btn btn-warning px-4 py-2 fw-semibold shadow-sm">
                    <i class="bi bi-check-circle"></i> Guardar 
                </button>
                <a href="{{route("home")}}" class="btn  px-4 py-2 ms-2">
                    <i class="bi bi-arrow-left"></i> Volver
                </a>
            </div>

        </form>
    </div>
</div>




<!-- PRINCIPAL CRUD -->

<div class="container mt-4">

    <div class="table-responsive">
        <table class="table table-striped table-hover align-middle text-center shadow-lg rounded-3">
            <thead class="table-secondary text-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre candidato</th>
                    <th scope="col">Nivel de estudio</th>
                    <th scope="col">Institucion</th>
                    <th scope="col">Nombre del estudio</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Fecha de inicio</th>
                    <th scope="col">Fecha de finalizacion</th>
                    <th scope="col" colspan="2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($studies as $study)
                    <tr>
                        <td>{{$study->id}}</td>
                        <td>{{$study->candidate->name}}</td>
                        <td>{{$study->study_level}}</td>
                        <td>{{$study->institution}}</td>
                        <td>{{$study->study_name}}</td>
                        <td>{{$study->status}}</td>
                        <td>{{$study->start_date}}</td>
                        <td>{{$study->finish_date}}</td>
        
                        <td><a href="{{route("studies.edit", $study->id)}}" class="btn btn-warning btn-sm px-3">
                             <i class="bi bi-pencil-square"></i> Editar</a>
                        </td>
                        <td>
                            <form action="{{route("studies.destroy", $study->id)}}" method="post">
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



@include("footer")

