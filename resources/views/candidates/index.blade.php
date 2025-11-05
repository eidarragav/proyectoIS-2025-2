@include("navbar")

<!-- Hero principal -->
<div class="container-fluid bg-primary py-5 mb-5 hero-header">
  <div class="container py-5 text-center">
    <h1 class="display-3 text-white mb-4 animated slideInDown">Candidatos</h1>
  </div>
</div>

<!--Ingresar -->
<div class="container mt-5">
    <div class="card shadow-lg rounded-4 p-4">
        <h3 class="text-center mb-4">Candidato</h3>


        <form action="{{route("candidates.store")}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="user_id" class="form-label fw-bold">Nombre de usuario</label>
                <select name="user_id" id="user_id" 
                        class="form-select border-0 rounded-3 shadow-sm">
                    <option value="" selected disabled>Seleccione el usuario</option>
                    @foreach ($users as $user)
                        <option value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="document" class="form-label fw-bold">Documento</label>
                <input type="text" name="document" id="document"
                       class="form-control  border-0 rounded-3 shadow-sm" placeholder="Ingrese su documento">
            </div>

            <div class="mb-3">
                <label for="name" class="form-label fw-bold">Nombre Completo</label>
                <input type="text" name="name" id="name"
                       class="form-control  border-0 rounded-3 shadow-sm" placeholder="Ingrese su nombre">
            </div>

            <div class="mb-3">
                <label for="birthdate" class="form-label fw-bold">Fecha Nacimiento</label>
                <input type="date" name="birthdate" 
                       class="form-control border-0 rounded-3 shadow-sm" placeholder="Ingrese su fecha de nacimiento ">
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label fw-bold">Telefono</label>
                <input type="text" name="phone" id="phone" 
                       class="form-control border-0 rounded-3 shadow-sm" placeholder="Ingrese su telefono">
            </div>
            
            <div class="mb-3">
                <label for="deparment" class="form-label fw-bold">Departamento</label>
                <input type="text" name="deparment" id="deparment" 
                       class="form-control border-0 rounded-3 shadow-sm" placeholder="Ingrese su departamento">
            </div>

            <div class="mb-3">
                <label for="city" class="form-label fw-bold">Ciudad</label>
                <input type="text" name="city" id="city" 
                       class="form-control border-0 rounded-3 shadow-sm" placeholder="Ingrese su ciudad">
            </div>

            <div class="mb-3">
                <label for="city" class="form-label fw-bold">Cargo</label>
                <input type="text" name="job_title" id="job_title" 
                       class="form-control border-0 rounded-3 shadow-sm" placeholder="Ingrese su cargo">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label fw-bold">Descripcion</label>
                <input type="text" name="description" id="description" 
                       class="form-control border-0 rounded-3 shadow-sm" placeholder="Ingrese su descripcion">
            </div>

            <div class="mb-3">
                <label for="can_travel" class="form-label fw-bold">¿Puede viajar?</label>
                <select name="can_travel" id="can_travel" 
                        class="form-select border-0 rounded-3 shadow-sm">
                    <option value="" selected disabled>Seleccione si o no</option>
                    <option value="yes">Si</option>
                    <option value="no">No</option>
                </select>
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
                    <th scope="col">Nombre Usuario</th>
                    <th scope="col">Nombre Candidato</th>
                    <th scope="col">Documento</th>
                    <th scope="col">FechaNacimiento</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Departamento</th>
                    <th scope="col">Ciudad</th>
                    <th scope="col">Cargo</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Viajar</th>
                    <th scope="col" colspan="2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($candidates as $candidate)
                    <tr>
                        <td>{{$candidate->id}}</td>
                        <td>{{$candidate->user->name}}</td>
                        <td>{{$candidate->name}}</td>
                        <td>{{$candidate->document}}</td>
                        <td>{{$candidate->birthdate}}</td>
                        <td>{{$candidate->phone}}</td>
                        <td>{{$candidate->deparment}}</td>
                        <td>{{$candidate->city}}</td>
                        <td>{{$candidate->job_title}}</td>
                        <td>{{$candidate->description}}</td>
                        <td>{{$candidate->can_travel}}</td>
                        <td><a href="{{route("candidates.edit", $candidate->id)}}" class="btn btn-warning btn-sm px-3">
                             <i class="bi bi-pencil-square"></i> Editar</a>
                        </td>
                        <td>
                            <form action="{{route("candidates.destroy", $candidate->id)}}" method="post">
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

