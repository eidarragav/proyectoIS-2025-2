@include("navbar")

<!-- Hero principal -->
<div class="container-fluid bg-primary py-5 mb-5 hero-header">
  <div class="container py-5 text-center">
    <h1 class="display-3 text-white mb-4 animated slideInDown">Postulaciones</h1>
  </div>
</div>

<!--Ingresar -->
<div class="container mt-5">
    <div class="card shadow-lg rounded-4 p-4">
        <h3 class="text-center mb-4">Postulaciones</h3>


        <form action="{{route("applications.store")}}" method="post">
            @csrf

            <div class="mb-3">
                <label for="candidate_id" class="form-label fw-bold">Nombre candidato</label>
                <select name="candidate_id" id="candidate_id" 
                        class="form-select border-0 rounded-3 shadow-sm">
                    <option value="" selected disabled>Seleccione el nombre</option>
                    @foreach ($candidates as $candidate)
                        <option value="{{$candidate->id}}">{{$candidate->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="offer_id" class="form-label fw-bold">Oferta</label>
                <select name="offer_id" id="offer_id" 
                        class="form-select border-0 rounded-3 shadow-sm">
                    <option value="" selected disabled>Seleccione la oferta</option>
                    @foreach ($offers as $offer)
                        <option value="{{$offer->id}}">{{$offer->title}}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="status" class="form-label fw-bold">Estado</label>
                <select name="status" id="status" 
                        class="form-select border-0 rounded-3 shadow-sm">
                    <option value="" selected disabled>Seleccione el estado de la experiencia</option>
                    <option value="sent">Enviada</option>
                    <option value="under_review">En Revision</option>
                    <option value="selected">Seleccionado</option>
                    <option value="refused">Rechazada</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="application_date" class="form-label fw-bold">Fecha de postulacion</label>
                <input type="date" name="application_date" id="application_date" 
                       class="form-control border-0 rounded-3 shadow-sm" placeholder="Ingrese la fecha de postulacion">
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
                    <th scope="col">Nombre candidato</th>
                    <th scope="col">Oferta</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Fecha Postulacion</th>
                    <th scope="col" colspan="2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($applications as $application)
                    <tr>
                        <td>{{$application->id}}</td>
                        <td>{{$application->candidate->name}}</td>
                        <td>{{$application->offer->title}}</td>
                        <td>{{$application->status}}</td>
                        <td>{{$application->application_date}}</td>
        
                        <td><a href="{{route("applications.edit", $application->id)}}" class="btn btn-warning btn-sm px-3">
                             <i class="bi bi-pencil-square"></i> Editar</a>
                        </td>
                        <td>
                            <form action="{{route("applications.destroy", $application->id)}}" method="post">
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

