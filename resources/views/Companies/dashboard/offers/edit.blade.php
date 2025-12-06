@include("navbar")

<!-- Hero principal -->
<div class="container-fluid bg-primary py-5 mb-5 hero-header">
  <div class="container py-5 text-center">
    <h1 class="display-3 text-white mb-4 animated slideInDown">Editar Oferta</h1>
  </div>
</div>

<!-- EDITAR OFERTA -->
<div class="container mt-5">
    <div class="card shadow-lg rounded-4 p-4">
        
        <form action="{{ route('company.offers.update', $offer->id) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Empresa -->
            <div class="mb-3">
                <label class="form-label fw-bold text-dark">Empresa</label>
                <select class="form-select border-0 rounded-3 shadow-sm" name="company_id">
                        <option value="{{Auth::user()->id}}">{{Auth::user()->name}} 
                        </option>
                </select>
            </div>

            <!-- Título -->
            <div class="mb-3">
                <label class="form-label fw-bold">Título</label>
                <input type="text" name="title" value="{{ $offer->title }}"
                       class="form-control border-0 rounded-3 shadow-sm" 
                       placeholder="Ingrese el nombre de la oferta">
            </div>

            <!-- Descripción -->
            <div class="mb-3">
                <label class="form-label fw-bold">Descripción</label>
                <input type="text" name="description" value="{{ $offer->description }}"
                       class="form-control border-0 rounded-3 shadow-sm" 
                       placeholder="Ingrese la descripción">
            </div>

            <!-- Salario -->
            <div class="mb-3">
                <label class="form-label fw-bold">Salario</label>
                <input type="text" name="salary" value="{{ $offer->salary }}"
                       class="form-control border-0 rounded-3 shadow-sm" 
                       placeholder="Ingrese el salario">
            </div>

            <!-- Modalidad -->
            <div class="mb-3">
                <label class="form-label fw-bold">Modalidad del trabajo</label>
                <input type="text" name="work_modality" value="{{ $offer->work_modality }}"
                       class="form-control border-0 rounded-3 shadow-sm" 
                       placeholder="Ingrese la modalidad">
            </div>

            <!-- Contrato -->
            <div class="mb-3">
                <label class="form-label fw-bold">Tipo de contrato</label>
                <input type="text" name="type_contract" value="{{ $offer->type_contract }}"
                       class="form-control border-0 rounded-3 shadow-sm" 
                       placeholder="Ingrese el tipo de contrato">
            </div>

            <!-- Botones -->
            <div class="text-center mt-4">
                <button type="submit" class="btn btn-warning px-4 py-2 fw-semibold shadow-sm">
                    <i class="bi bi-check-circle"></i> Guardar Cambios
                </button>

                <a  href="{{route("company.dashboard")}}"  class="btn px-4 py-2 ms-2">
                    <i class="bi bi-arrow-left"></i> Volver
                </a>
            </div>

        </form>
    </div>
</div>

@include("footer")
