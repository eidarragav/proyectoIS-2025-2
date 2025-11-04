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
        <h3 class="text-center mb-4"></h3>
        <form action='{{route('companies.update', $company->id)}}' method="post">
            @csrf
            @method("PUT")
            <div class='mb-3 text-dark'>
                @csrf
                <label for="" class="form-label fw-bold">Usuario</label>
                <select name="user_id" id="" class="form-select border-0 rounded-3 shadow-sm">
                    @foreach ($users as $user)
                        <option value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3 text-dark" >
                <label for="" class="form-label fw-bold">Nombre</label>
                <input type="text" name="name" id="" value="{{$company->name}}"
                       class="form-control   border-0 rounded-3 shadow-sm" placeholder="Ingrese nombre de la empresa">
            </div>

            <div class="mb-3 text-dark">
                <label for="" class="form-label fw-bold">Sector</label>
                <input type="text" name="sector" id="" value="{{$company->sector}}"
                       class="form-control  border-0 rounded-3 shadow-sm" placeholder="Ingrese  el Sector">
            </div>

            <div class="mb-3 text-dark">
                <label for="" class="form-label fw-bold">Telefono</label>
                <input type="text" name="phone" id=""  value="{{$company->phone}}"
                       class="form-control border-0 rounded-3 shadow-sm" placeholder="Ingrese el telefono">
            </div>

            <div class="mb-3 text-dark">
                <label for="" class="form-label fw-bold">Ciudad</label> 
                <input type="text" name="city" id="" value="{{$company->city}}"
                       class="form-control border-0 rounded-3 shadow-sm" placeholder="Ingrese la ciudad">
            </div>

            <div class="mb-3 text-dark">
                <label for="" class="form-label fw-bold">Dirección</label>
                <input type="text" name="adress" id="" value="{{$company->adress}}"
                       class="form-control border-0 rounded-3 shadow-sm" placeholder="Ingrese la dirección">
            </div>

            <div class="mb-3 text-dark">
                <label for="" class="form-label fw-bold">Descipción</label>
                <input type="text" name="description" id=""  value="{{$company->description}}"
                       class="form-control border-0 rounded-3 shadow-sm" placeholder="Ingrese la descripción">
            </div>

            <div class="mb-3 text-dark">
                <label for="" class="form-label fw-bold">Web</label>
                <input type="text" name="website" id="" value="{{$company->website}}"
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


@include("footer")

