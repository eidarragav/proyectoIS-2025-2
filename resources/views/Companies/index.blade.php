@include("navbar")

<!-- Hero principal -->
<div class="container-fluid bg-primary py-5 mb-5 hero-header">
  <div class="container py-5 text-center">
    <h1 class="display-3 text-white mb-4 animated slideInDown">Compañías</h1>
  </div>
</div>

<!--Ingresar -->
<div class="container mt-5">
    <div class="card text-light shadow-lg rounded-4 p-4">
        <h3 class="text-center mb-4"></h3>
        <form action='{{route('companies.store')}}' method="post">


            <div class='mb-3'>
                @csrf
                <label for="" class="form-label fw-bold text-dark">Usuario</label>
                <select name="user_id" id="" class="form-select border-0 rounded-3 shadow-sm">
                    
                    @foreach ($users as $user)
                        <option value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="" class="form-label fw-bold text-dark">Nombre</label>
                <input type="text" name="name" id="nombre"
                       class="form-control   border-0 rounded-3 shadow-sm" placeholder="Ingrese nombre de la empresa">
            </div>

            <div class="mb-3">
                <label for="" class="form-label fw-bold text-dark">Sector</label>
                <input type="text" name="sector" id="email"
                       class="form-control  border-0 rounded-3 shadow-sm" placeholder="Ingrese  el Sector">
            </div>

            <div class="mb-3">
                <label for="" class="form-label fw-bold text-dark">Telefono</label>
                <input type="text" name="phone" id="role" 
                       class="form-control border-0 rounded-3 shadow-sm" placeholder="Ingrese el telefono">
            </div>

            <div class="mb-3">
                <label for="" class="form-label fw-bold text-dark">Ciudad</label>
                <input type="text" name="city" id="role" 
                       class="form-control border-0 rounded-3 shadow-sm" placeholder="Ingrese la ciudad">
            </div>

            <div class="mb-3">
                <label for="" class="form-label fw-bold text-dark">Dirección</label>
                <input type="text" name="adress" id="role" 
                       class="form-control border-0 rounded-3 shadow-sm" placeholder="Ingrese la dirección">
            </div>

            <div class="mb-3">
                <label for="" class="form-label fw-bold text-dark">Descipción</label>
                <input type="text" name="description" id="role" 
                       class="form-control border-0 rounded-3 shadow-sm" placeholder="Ingrese la descripción">
            </div>

            <div class="mb-3">
                <label for="" class="form-label fw-bold text-dark">Web</label>
                <input type="text" name="website" id="role" 
                       class="form-control border-0 rounded-3 shadow-sm" placeholder="Ingrese la web">
            </div>

            <div class="text-center mt-4">
                <button type="submit" class="btn btn-warning px-4 py-2 fw-semibold shadow-sm">
                    <i class="bi bi-check-circle" ></i> Guardar 
                </button>
                <a href="{{route("home")}}" class="btn  px-4 py-2 ms-2">
                    <i class="bi bi-arrow-left" ></i> Volver
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
                    <th scope="col">Id</th>
                    <th scope="col">Usuario</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Sector</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col">Ciudad</th>
                    <th scope="col">Dirección</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">WebSite</th>
                    <th scope="col" colspan="2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($companies as $company)
                    <tr>
                        <td>{{$company->id}}</td>
                        <td>{{$company->user->name}}</td>
                        <td>{{$company->name}}</td>
                        <td>{{$company->sector}}</td>
                        <td>{{$company->phone}}</td>  
                        <td>{{$company->city}}</td> 
                        <td>{{$company->adress}}</td> 
                        <td>{{$company->description}}</td> 
                        <td>{{$company->website}}</td> 
                                                                                 
                        <td>
                        <a href="{{route('companies.edit', $company->id)}}" class="btn btn-warning btn-sm px-3">
                            <i class="bi bi-pencil-square"></i> Editar
                        </a>
                        </td>
                        <td>
                            <form action="{{route('companies.destroy', $company->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
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

