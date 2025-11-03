@include("navbar")

<!-- Hero principal -->
<div class="container-fluid bg-primary py-5 mb-5 hero-header">
  <div class="container py-5 text-center">
    <h1 class="display-3 text-white mb-4 animated slideInDown">Editar </h1>
  </div>
</div>

<!-- EDITAR USUARIO -->

<div class="container mt-5">
    <div class="card text-light shadow-lg rounded-4 p-4">
        <h3 class="text-center mb-4">Editar Usuario</h3>

        <form action="{{route("users.update", $user->id)}}" method="post">
            @csrf
            @method("PUT")
            <div class="mb-3">
                <label for="nombre" class="form-label fw-bold">Nombre</label>
                <input type="text" name="name" id="name" value="{{$user->name}}"
                       class="form-control  border-0 rounded-3 shadow-sm" placeholder="Ingrese su nombre">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label fw-bold">Email</label>
                <input type="text" name="email" id="email" value="{{$user->email}}"
                       class="form-control border-0 rounded-3 shadow-sm" placeholder="Ingrese su email ">
            </div>

            <div class="mb-3">
                <label for="role_id" class="form-label fw-bold">Tipo Usuario</label>
                <select name="role_id" id="role_id" 
                        class="form-select border-0 rounded-3 shadow-sm">
                    <option value="" selected disabled>Seleccione el tipo de usuario</option>
                    @foreach ($roles as $role)
                        <option value="{{$role->id}}" {{$user->role_id == $role->id ? 'selected' : ''}}>{{$role->role_name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="role" class="form-label fw-bold">Contraseña</label>
                <input type="text" name="password" id="password" value="{{$user->password}}"
                       class="form-control border-0 rounded-3 shadow-sm" placeholder="Ingrese su contraseña">
            </div>

            <div class="text-center mt-4">
                <button type="submit" class="btn btn-warning px-4 py-2 fw-semibold shadow-sm">
                    <i class="bi bi-check-circle"></i> Guardar Cambios
                </button>
                <a href="{{route("users.index")}}" class="btn  px-4 py-2 ms-2">
                    <i class="bi bi-arrow-left"></i> Volver
                </a>
            </div>






        </form>
    </div>
</div>


@include("footer")

