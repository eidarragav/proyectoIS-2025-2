@include("navbar")

<!-- Hero principal -->
<div class="container-fluid bg-primary py-5 mb-5 hero-header">
  <div class="container py-5 text-center">
    <h1 class="display-3 text-white mb-4 animated slideInDown">Roles</h1>
  </div>
</div>

<!--Ingresar -->
<div class="container mt-5">
    <div class="card text-light shadow-lg rounded-4 p-4">
        <h3 class="text-center mb-4">Roles</h3>


        <form action="{{route("roles.store")}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="role_name" class="form-label fw-bold">Nombre del rol</label>
                <input type="text" name="role_name" id="role_name"
                       class="form-control  border-0 rounded-3 shadow-sm" placeholder="Ingrese el nombre del rol">
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
                    <th scope="col">Nombre</th>
                    <th scope="col" colspan="2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($roles as $role)
                    <tr>
                        <td>{{$role->id}}</td>
                        <td>{{$role->role_name}}</td>
            
                        <td><a href="{{route("roles.edit", $role->id)}}" class="btn btn-warning btn-sm px-3">
                             <i class="bi bi-pencil-square"></i> Editar</a>
                        </td>
                        <td>
                            <form action="{{route("roles.destroy", $role->id)}}" method="post">
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

