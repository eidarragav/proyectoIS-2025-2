@include("navbar")

<!-- Hero principal -->
<div class="container-fluid bg-primary py-5 mb-5 hero-header">
  <div class="container py-5 text-center">
    <h1 class="display-3 text-white mb-4 animated slideInDown">Editar </h1>
  </div>
</div>

<!-- EDITAR Rol -->

<div class="container mt-5">
    <div class="card text-light shadow-lg rounded-4 p-4">
        <h3 class="text-center mb-4">Editar Rol</h3>

        <form action="{{route("roles.update", $role->id)}}" method="post">
            @csrf
            @method("PUT")
            <div class="mb-3">
                <label for="role_name" class="form-label fw-bold">Nombre del rol</label>
                <input type="text" name="role_name" id="role_name"
                       class="form-control  border-0 rounded-3 shadow-sm" placeholder="Ingrese su nombre">
            </div>


            <div class="text-center mt-4">
                <button type="submit" class="btn btn-warning px-4 py-2 fw-semibold shadow-sm">
                    <i class="bi bi-check-circle"></i> Guardar Cambios
                </button>
                <a href="{{route("roles.index")}}" class="btn  px-4 py-2 ms-2">
                    <i class="bi bi-arrow-left"></i> Volver
                </a>
            </div>






        </form>
    </div>
</div>


@include("footer")

