@include("navbar")

<!-- Hero principal -->
<div class="container-fluid bg-primary py-5 mb-5 hero-header">
  <div class="container py-5 text-center">
    <h1 class="display-3 text-white mb-4 animated slideInDown">Experiencias</h1>
  </div>
</div>

<!--Ingresar -->
<div class="container mt-5">
    <div class="card shadow-lg rounded-4 p-4">
        <h3 class="text-center mb-4">Experiencias</h3>


        <form action="{{route("experiences.store")}}" method="post">
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
                <label for="job_title" class="form-label fw-bold">Cargo</label>
                <input type="text" name="job_title" id="job_title"
                       class="form-control  border-0 rounded-3 shadow-sm" placeholder="Ingrese el cargo">
            </div>

            <div class="mb-3">
                <label for="company" class="form-label fw-bold">Empresa</label>
                <input type="text" name="company" id="company"
                       class="form-control  border-0 rounded-3 shadow-sm" placeholder="Ingrese la empresa">
            </div>

            <div class="mb-3">
                <label for="functions" class="form-label fw-bold">Funciones</label>
                <input type="text" name="functions" id="functions"
                       class="form-control  border-0 rounded-3 shadow-sm" placeholder="Ingrese las funciones">
            </div>

            <div class="mb-3">
                <label for="status" class="form-label fw-bold">Estado</label>
                <select name="status" id="status" 
                        class="form-select border-0 rounded-3 shadow-sm">
                    <option value="" selected disabled>Seleccione el estado de la experiencia</option>
                    <option value="active">Activa</option>
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
                    <th scope="col">Cargo</th>
                    <th scope="col">Empresa</th>
                    <th scope="col">Funciones</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Fecha de inicio</th>
                    <th scope="col">Fecha de finalizacion</th>
                    <th scope="col" colspan="2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($experiences as $experience)
                    <tr>
                        <td>{{$experience->id}}</td>
                        <td>{{$experience->candidate->name}}</td>
                        <td>{{$experience->job_title}}</td>
                        <td>{{$experience->company}}</td>
                        <td>{{$experience->functions}}</td>
                        <td>{{$experience->status}}</td>
                        <td>{{$experience->start_date}}</td>
                        <td>{{$experience->finish_date}}</td>
        
                        <td><a href="{{route("experiences.edit", $experience->id)}}" class="btn btn-warning btn-sm px-3">
                             <i class="bi bi-pencil-square"></i> Editar</a>
                        </td>
                        <td>
                            <form action="{{route("experiences.destroy", $experience->id)}}" method="post">
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

