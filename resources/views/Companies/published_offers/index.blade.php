@include('navbar')

<div class="container-xxl bg-white p-0">

    <!-- Header -->
    <div class="container-xxl py-5 bg-dark page-header mb-5">
        <div class="container text-center my-5 pt-5 pb-4">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Ofertas Publicadas</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb text-uppercase justify-content-center">
                    <li class="breadcrumb-item">
                        <a href="{{ route('company.dashboard') }}">Inicio</a>
                    </li>
                    <li class="breadcrumb-item text-white active" aria-current="page">
                        Ofertas
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Contenido principal -->
    <div class="container-xxl py-5">
        <div class="container">

            <!-- Encabezado -->
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h3 class="mb-0">Ofertas activas</h3>
                 <a href="{{route('company.offer')}}" class="btn btn-sm btn-success">
                        <i class="fa fa-plus me-1"></i> Publicar nueva oferta
                    </a>
            </div>

            <div class="row g-4">

                @forelse ($offers as $offer)
                   

                    <div class="col-lg-4 col-md-6 wow fadeInUp">
                        <div class="job-item p-4 border rounded bg-light position-relative h-100 d-flex flex-column justify-content-between">

                            <div>
                                <div class="d-flex align-items-center mb-3">
                                    <i class="fa fa-briefcase fa-2x text-primary me-3"></i>
                                    <div>
                                        <h5 class="mb-1">{{ $offer->title }}</h5>
                                        <small class="text-muted">
                                            Publicado: {{ $offer->created_at->format('d M Y') }}
                                        </small>
                                    </div>
                                </div>

                                <p class="mb-2">
                                    <strong>Descripción: </strong>
                                    {{ Str::limit($offer->description, 60) }}
                                </p>

                                <p class="mb-2">
                                    <strong>Modalidad: </strong>{{ $offer->work_modality}}
                                </p>

                                <p class="mb-2">
                                    <strong>Tipo de contrato: </strong>{{ $offer->type_contract }}
                                </p>

                                <p class="mb-2">
                                    <strong>Salario: </strong>
                                    {{ $offer->salary}}
                                </p>

                                <span class="badge bg-success">Activa</span>
                            </div>

                            <button class="btn btn-outline-primary mt-3 w-100" 
                                data-bs-toggle="modal" 
                                data-bs-target="#modalOffer{{ $offer->id }}">
                                Ver más
                            </button>

                        </div>
                    </div>

                    <!-- Modal Detalle Oferta -->
                    <div class="modal fade" id="modalOffer{{ $offer->id }}" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">

                                <div class="modal-header bg-primary text-white">
                                    <h5 class="modal-title">{{ $offer->title }}</h5>
                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                                </div>

                                <div class="modal-body">
                                    <p><strong>Descripción:</strong> {{ $offer->description }}</p>
                                    <p><strong>Modalidad:</strong> {{ $offer->work_modality }}</p>
                                    <p><strong>Tipo de contrato:</strong> {{ $offer->type_contract }}</p>
                                    <p><strong>Salario:</strong>
                                        {{$offer->salary}}
                                    </p>
                                </div>

                                <div class="modal-footer justify-content-between">

                                    <div>
                                        <a href={{ route('company.offers.edit', $offer->id) }} class="btn btn-warning">
                                            <i class="fa fa-edit me-1"></i>Editar
                                        </a>

                                        <form action="{{route('company.delete_offer', $offer->id)}} " method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">
                                                <i class="fa fa-trash me-1"></i>Eliminar
                                            </button>
                                        </form>
                                    </div>

                                    <button class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                </div>

                            </div>
                        </div>
                    </div>
                @empty

                    <p class="text-center mt-4">No tienes ofertas publicadas.</p>

                @endforelse

            </div>

        </div>
    </div>
</div>

@include('footer')


