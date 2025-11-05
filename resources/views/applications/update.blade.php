@include("navbar")

<!-- Hero principal -->
<div class="container-fluid bg-primary py-5 mb-5 hero-header">
  <div class="container py-5 text-center">
    <h1 class="display-3 text-white mb-4 animated slideInDown">Editar </h1>
  </div>
</div>

<!-- EDITAR ESTUDIOS -->

<div class="container mt-5">
    <div class="card  shadow-lg rounded-4 p-4">
        <h3 class="text-center mb-4">Editar Postulaciones</h3>
        <form action="{{route("applications.update", $application->id)}}" method="post">
            @csrf
            @method("PUT")
        
            <div class="mb-3">
                <label for="candidate_id" class="form-label fw-bold">Nombre candidato</label>
                <select name="candidate_id" id="candidate_id" 
                        class="form-select border-0 rounded-3 shadow-sm">
                    <option value="" selected disabled>Seleccione el nombre</option>
                    @foreach ($candidates as $candidate)
                        <option value="{{$candidate->id}}" {{$candidate->name==$application->candidate->name ? 'selected' : ''}}>{{$candidate->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="offer_id" class="form-label fw-bold">Oferta</label>
                <select name="offer_id" id="offer_id" 
                        class="form-select border-0 rounded-3 shadow-sm">
                    <option value="" selected disabled>Seleccione la oferta</option>
                    @foreach ($offers as $offer)
                        <option value="{{$offer->id}}" {{$offer->title==$application->offer->title ? 'selected' : ''}}>{{$offer->title}}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="status" class="form-label fw-bold">Estado</label>
                <select name="status" id="status" 
                        class="form-select border-0 rounded-3 shadow-sm">
                    <option value="" selected disabled>Seleccione el estado del estudio</option>
                    <option value="sent" {{$application->status=='sent' ? 'selected' : ''}}>Enviada</option>
                    <option value="under_review" {{$application->status=='under_review' ? 'selected' : ''}}>En proceso</option>
                    <option value="selected" {{$application->status=='selected' ? 'selected' : ''}}>Seleccionado</option>
                    <option value="refuted" {{$application->status=='refuted' ? 'selected' : ''}}>Rechazado</option>
                </select>
            </div>
            
            <div class="mb-3">
                <label for="application_date" class="form-label fw-bold">Fecha de postulacion</label>
                <input type="date" name="application_date" id="application_date" value="{{$application->application_date}}"
                       class="form-control border-0 rounded-3 shadow-sm" placeholder="Ingrese la fecha de postulacion">
            </div>


            <div class="text-center mt-4">
                <button type="submit" class="btn btn-warning px-4 py-2 fw-semibold shadow-sm">
                    <i class="bi bi-check-circle"></i> Guardar Cambios
                </button>
                <a href="{{route("experiences.index")}}" class="btn  px-4 py-2 ms-2">
                    <i class="bi bi-arrow-left"></i> Volver
                </a>
            </div>






        </form>
    </div>
</div>


@include("footer")

