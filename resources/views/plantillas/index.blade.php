@include("navbar")

<!-- Hero principal -->
<div class="container-fluid bg-primary py-5 mb-5 hero-header">
  <div class="container py-5 text-center">
    <h1 class="display-3 text-white mb-4 animated slideInDown">Tabla</h1>
  </div>
</div>

<!--Ingresar -->
<div class="container mt-5">
    <div class="card text-light shadow-lg rounded-4 p-4">
        <h3 class="text-center mb-4">Tabla</h3>

        <form>
            <div class="mb-3">
                <label for="" class="form-label fw-bold">Atributo</label>
                <input type="text" name="" id=""
                       class="form-control  text-light border-0 rounded-3 shadow-sm" placeholder="Ingrese ">
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
                    <th scope="col">#</th>
                    <th scope="col">Atributo</th>
                    <th scope="col">Atributo</th>
                    <th scope="col">Atributo</th>
                    <th scope="col" colspan="2">Acciones</th>
                </tr>
            </thead>
            <tbody>
              <td>1</td>
              <td>Elkin</td>
              <td>Eidarraga@gmail.com</td>
              <td>Programador</td>
              <td>
              <a href="" class="btn btn-warning btn-sm px-3">
                 <i class="bi bi-pencil-square"></i> Editar
              </a>
              </td>
              <td>
                <form >
                  <button type="submit" class="btn btn-danger btn-sm px-3">
                   <i class="bi bi-trash"></i> Eliminar
                  </button>
                </form>
              </td>
              </tr>
            </tbody>
         </table>
    </div>
</div>



@include("footer")

