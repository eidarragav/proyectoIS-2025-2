@include("navbar")

<!-- Hero principal -->
<div class="container-fluid bg-primary py-5 mb-5 hero-header">
  <div class="container py-5 text-center">
    <h1 class="display-3 text-white mb-4 animated slideInDown">Editar </h1>
  </div>
</div>

<!-- EDITAR OFERTA -->

<div class="container mt-5">
    <div class="card shadow-lg rounded-4 p-4">
        <h3 class="text-center mb-4"></h3>
        

        <form action="{{route('offers.update', $offer->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for=""  class="form-label fw-bold text-dark">Empresa</label>
                <select class="form-select border-0 rounded-3 shadow-sm" name="company_id" > 
                     @foreach($companies as $company)
                        <option value="{{ $company->id }}" 
                        {{ $company->id == old('company_id', $offer->company_id ?? '') ? 'selected' : '' }}>
                        {{ $company->name }}
                        </option>
                    @endforeach
                </select>
                
            </div>

            <label for="nombre" class="form-label fw-bold">Título</label>
                <input type="text" name="title" id="" value="{{$offer->title}}"
                       class="form-control  border-0 rounded-3 shadow-sm" placeholder="Ingrese el nombre de la oferta ">

            <div class="mb-3">
                <label for="role" class="form-label fw-bold">Descripcion</label>
                <input type="text" name="description" id="" value="{{$offer->description}}"
                       class="form-control border-0 rounded-3 shadow-sm" placeholder="Ingrese la descripción">
            </div>

            <div class="mb-3">
                <label for="role" class="form-label fw-bold">Salario</label>
                <input type="text" name="salary" id="" value="{{$offer->salary}}"
                       class="form-control border-0 rounded-3 shadow-sm" placeholder="Ingrese el salario">
            </div>

            <div class="mb-3">
                <label for="role" class="form-label fw-bold">Modalidad del trabajo</label>
                <input type="text" name="work_modality" id="" value="{{$offer->work_modality}}"
                       class="form-control border-0 rounded-3 shadow-sm" placeholder="Ingrese la modalidad">
            </div>

            <div class="mb-3">
                <label for="role" class="form-label fw-bold">Tipo de contrato</label>
                <input type="text" name="type_contract" id="" value="{{$offer->type_contract}}"
                       class="form-control border-0 rounded-3 shadow-sm" placeholder="Ingrese el tipo de contrato">
            </div>

            <div class="text-center mt-4">
                <button type="submit" class="btn btn-warning px-4 py-2 fw-semibold shadow-sm">
                    <i class="bi bi-check-circle"></i> Guardar Cambios
                </button>
                <a href="{{route("offers.index")}}" class="btn  px-4 py-2 ms-2">
                    <i class="bi bi-arrow-left"></i> Volver
                </a>
            </div>


        </form>
    </div>
</div>


@include("footer")

