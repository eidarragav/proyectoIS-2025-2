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
        <h3 class="text-center mb-4">Editar </h3>

        <form>
            <div class="mb-3">
                <label for="nombre" class="form-label fw-bold">Atributo</label>
                <input type="text" name="" id=""
                       class="form-control  text-light border-0 rounded-3 shadow-sm" placeholder="Ingrese">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label fw-bold">Atributo</label>
                <input type="text" name="" id=""
                       class="form-control text-light border-0 rounded-3 shadow-sm" placeholder="Ingrese ">
            </div>

            <div class="mb-3">
                <label for="role" class="form-label fw-bold">Atributo</label>
                <input type="text" name="" id="" 
                       class="form-control text-light border-0 rounded-3 shadow-sm" placeholder="Ingrese">
            </div>

            <div class="text-center mt-4">
                <button type="submit" class="btn btn-warning px-4 py-2 fw-semibold shadow-sm">
                    <i class="bi bi-check-circle"></i> Guardar Cambios
                </button>
                <a href="{{route("home")}}" class="btn  px-4 py-2 ms-2">
                    <i class="bi bi-arrow-left"></i> Volver
                </a>
            </div>






        </form>
    </div>
</div>


@include("footer")

