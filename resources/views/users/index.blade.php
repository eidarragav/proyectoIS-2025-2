@include("navbar")

<!-- Hero principal -->
<div class="container-fluid bg-primary py-5 mb-5 hero-header">
  <div class="container py-5 text-center">
    <h1 class="display-3 text-white mb-4 animated slideInDown">Usuarios</h1>
  </div>
</div>

<!--Ingresar -->
<div class="container mt-5">
    <div class="card text-light shadow-lg rounded-4 p-4">
        <h3 class="text-center mb-4">Usuario</h3>


        <form action="{{route("users.store")}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="nombre" class="form-label fw-bold">Nombre</label>
                <input type="text" name="name" id="name"
                       class="form-control  border-0 rounded-3 shadow-sm" placeholder="Ingrese su nombre">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label fw-bold">Email</label>
                <input type="text" name="email" id="email"
                       class="form-control border-0 rounded-3 shadow-sm" placeholder="Ingrese su email ">
            </div>

            <div class="mb-3">
                <label for="role_id" class="form-label fw-bold">Tipo Usuario</label>
                <select name="role_id" id="role_id" 
                        class="form-select border-0 rounded-3 shadow-sm">
                    <option value="" selected disabled>Seleccione el tipo de usuario</option>
                    @foreach ($roles as $role)
                        <option value="{{$role->id}}">{{$role->role_name}}</option>
                    @endforeach
                </select>
            </div>


            <div class="mb-3">
                <label for="role" class="form-label fw-bold">Contraseña</label>
                <input type="text" name="password" id="password" 
                       class="form-control border-0 rounded-3 shadow-sm" placeholder="Ingrese su contraseña">
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
                    <th scope="col">Email</th>
                    <th scope="col">TipoUsuario</th>
                    <!--<th scope="col">Contraseña</th>-->
                    <th scope="col" colspan="2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->role->role_name}}</td>
                         <!--<td>{{$user->password}}</td>-->
                        <td><a href="{{route("users.edit", $user->id)}}" class="btn btn-warning btn-sm px-3">
                             <i class="bi bi-pencil-square"></i> Editar</a>
                        </td>
                        <td>
                            <form action="{{route("users.destroy", $user->id)}}" method="post">
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

