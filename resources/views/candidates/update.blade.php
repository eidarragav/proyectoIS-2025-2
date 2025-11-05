@include("navbar")

<!-- Hero principal -->
<div class="container-fluid bg-primary py-5 mb-5 hero-header">
  <div class="container py-5 text-center">
    <h1 class="display-3 text-white mb-4 animated slideInDown">Editar </h1>
  </div>
</div>

<!-- EDITAR USUARIO -->

<div class="container mt-5">
    <div class="card  shadow-lg rounded-4 p-4">
        <h3 class="text-center mb-4">Editar Candidato</h3>
        <form action="{{route("candidates.update", $candidate->id)}}" method="post">
            @csrf
            @method("PUT")
            
            <div class="mb-3">
                <label for="user_id" class="form-label fw-bold">Nombre de usuario</label>
                <select name="user_id" id="user_id" 
                        class="form-select border-0 rounded-3 shadow-sm">
                    <option value="" selected disabled>Seleccione el usuario</option>
                    @foreach ($users as $user)
                        <option value="{{$user->id}}" {{$candidate->user_id==$user->id ? 'selected' : ''}}>{{$user->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="document" class="form-label fw-bold">Documento</label>
                <input type="text" name="document" id="document" value="{{$candidate->document}}"
                       class="form-control  border-0 rounded-3 shadow-sm" placeholder="Ingrese su documento">
            </div>

            <div class="mb-3">
                <label for="name" class="form-label fw-bold">Nombre Completo</label>
                <input type="text" name="name" id="name"
                       class="form-control  border-0 rounded-3 shadow-sm" placeholder="Ingrese su nombre">
            </div>

            <div class="mb-3">
                <label for="birthdate" class="form-label fw-bold">Fecha Nacimiento</label>
                <input type="date" name="birthdate" value="{{$candidate->birthdate}}"
                       class="form-control border-0 rounded-3 shadow-sm" placeholder="Ingrese su fecha de nacimiento ">
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label fw-bold">Telefono</label>
                <input type="text" name="phone" id="phone" value="{{$candidate->phone}}"
                       class="form-control border-0 rounded-3 shadow-sm" placeholder="Ingrese su telefono">
            </div>
            
            <div class="mb-3">
                <label for="deparment" class="form-label fw-bold">Departamento</label>
                <input type="text" name="deparment" id="deparment" value="{{$candidate->deparment}}"
                       class="form-control border-0 rounded-3 shadow-sm" placeholder="Ingrese su departamento">
            </div>

            <div class="mb-3">
                <label for="city" class="form-label fw-bold">Ciudad</label>
                <input type="text" name="city" id="city" value="{{$candidate->city}}"
                       class="form-control border-0 rounded-3 shadow-sm" placeholder="Ingrese su ciudad">
            </div>

            <div class="mb-3">
                <label for="city" class="form-label fw-bold">Cargo</label>
                <input type="text" name="job_title" id="job_title" value="{{$candidate->job_title}}"
                       class="form-control border-0 rounded-3 shadow-sm" placeholder="Ingrese su cargo">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label fw-bold">Descripcion</label>
                <input type="text" name="description" id="description" value="{{$candidate->description}}"
                       class="form-control border-0 rounded-3 shadow-sm" placeholder="Ingrese su descripcion">
            </div>

            <div class="mb-3">
                <label for="can_travel" class="form-label fw-bold">¿Puede viajar?</label>
                <select name="can_travel" id="can_travel" 
                        class="form-select border-0 rounded-3 shadow-sm">
                    <option value="" selected disabled>Seleccione si o no</option>
                    <option value="yes" {{$candidate->can_travel == 'yes' ? 'selected' : ''}}>Si</option>
                    <option value="no">No</option>
                </select>
            </div>

            <div class="text-center mt-4">
                <button type="submit" class="btn btn-warning px-4 py-2 fw-semibold shadow-sm">
                    <i class="bi bi-check-circle"></i> Guardar Cambios
                </button>
                <a href="{{route("candidates.index")}}" class="btn  px-4 py-2 ms-2">
                    <i class="bi bi-arrow-left"></i> Volver
                </a>
            </div>






        </form>
    </div>
</div>


@include("footer")

