@include("navbar")

<!-- Hero principal -->
<div class="container-fluid bg-primary py-5 mb-5 hero-header">
  <div class="container py-5 text-center">
    <h1 class="display-3 text-white mb-4 animated slideInDown">Ofertas</h1>
  </div>
</div>

<!--Ingresar -->
<div class="container mt-5">
    <div class="card shadow-lg rounded-4 p-4">
        <h3 class="text-center mb-4"></h3>
        

        <form action="{{route('offers.store')}}" method="post">
            @csrf
            <div class="mb-3">
                
                
                <label for="" name="company_id" class="form-label fw-bold ">Empresa</label>
                <select class="form-select border-0 rounded-3 shadow-sm" name="company_id" > 
                    @foreach($companies as $company)
                        <option  value="{{$company->id}}">{{$company->name}}</option>
                    @endforeach
                </select>
                
            </div>

            <label for="nombre" class="form-label fw-bold">Título</label>
                <input type="text" name="title" id=""
                       class="form-control  border-0 rounded-3 shadow-sm" placeholder="Ingrese el nombre de la oferta ">

            <div class="mb-3">
                <label for="role" class="form-label fw-bold">Descripcion</label>
                <input type="text" name="description" id="" 
                       class="form-control  border-0 rounded-3 shadow-sm" placeholder="Ingrese la descripción">
            </div>

            <div class="mb-3">
                <label for="role" class="form-label fw-bold">Salario</label>
                <input type="text" name="salary" id="" 
                       class="form-control  border-0 rounded-3 shadow-sm" placeholder="Ingrese el salario">
            </div>

            <div class="mb-3">
                <label for="role" class="form-label fw-bold">Modalidad del trabajo</label>
                <input type="text" name="work_modality" id="" 
                       class="form-control border-0 rounded-3 shadow-sm" placeholder="Ingrese la modalidad">
            </div>

            <div class="mb-3">
                <label for="role" class="form-label fw-bold">Tipo de contrato</label>
                <input type="text" name="type_contract" id="" 
                       class="form-control border-0 rounded-3 shadow-sm" placeholder="Ingrese el tipo de contrato">
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
                    <th scope="col">Id</th>
                    <th scope="col">Empresa</th>
                    <th scope="col">Titulo</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Salario</th>
                    <th scope="col">Modalidad</th>
                    <th scope="col">Tipo Contrato</th>
                    <th scope="col" colspan="2">Acciones</th>
                </tr>
            </thead>
            <tbody>

                @foreach($offers as $offer)
                    <tr>
                        <td>{{$offer->id}}</td>
                        <td>{{$offer->company->name}}</td>
                        <td>{{$offer->title}}</td>
                        <td>{{$offer->description}}</td>
                        <td>{{$offer->salary}}</td>
                        <td>{{$offer->work_modality}}</td>
                        <td>{{$offer->type_contract}}</td>


                        <td>
                            <a href="{{route('offers.edit', $offer->id)}}" class="btn btn-warning btn-sm px-3">
                                <i class="bi bi-pencil-square"></i> Editar
                            </a>
                        </td>
                        
                        <td>
                            <form action="{{route('offers.destroy', $offer->id)}} " method="POST">
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

