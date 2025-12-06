@include('navbar')

<div class="container-xxl bg-white p-0">

    <!-- Header -->
    <div class="container-xxl py-5 bg-dark page-header mb-5">
        <div class="container text-center my-5 pt-5 pb-4">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Mis Postulaciones</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb text-uppercase justify-content-center">
                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Postulaciones</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Botón para ir al pdf de las publicaciones -->
    <div style="display: flex; justify-content: center; margin-top: 50px;">
        <a href="{{ route('candidate.applications.pdf') }}" class="btn btn-success btn-sm" style="padding: 0.8rem 1.5rem; border-radius: 12px;">
            <i class="fa fa-plus me-1"></i> Descargar ofertas postuladas
        </a>
    </div>

    <!-- Contenido principal -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">

                <!-- Ejemplo de postulación -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="job-item p-4 border rounded bg-light position-relative">

                        <!-- Estado -->
                        <span class="badge bg-warning text-dark position-absolute top-0 end-0 m-3">En revisión</span>

                        <div class="d-flex align-items-center mb-3">
                            <i class="fa fa-briefcase fa-2x text-primary me-3"></i>
                            <div>
                                <h5 class="mb-1">Desarrollador Full Stack</h5>
                                <small class="text-muted">TechCorp S.A.</small>
                            </div>
                        </div>
                        <p class="mb-2"><i class="fa fa-map-marker-alt text-primary me-2"></i>Bogotá, Colombia</p>
                        <p class="mb-2"><i class="fa fa-clock text-primary me-2"></i>Tiempo completo</p>
                        <p class="mb-3"><i class="fa fa-calendar-alt text-primary me-2"></i>Postulado el: 10 Nov 2025</p>
                        
                        <button class="btn btn-outline-primary w-100" data-bs-toggle="modal" data-bs-target="#applicationModal1">Ver más</button>
                    </div>
                </div>

                <!-- Ejemplo de otra postulación -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="job-item p-4 border rounded bg-light position-relative">
                        <span class="badge bg-success position-absolute top-0 end-0 m-3">Aceptada</span>
                        <div class="d-flex align-items-center mb-3">
                            <i class="fa fa-briefcase fa-2x text-primary me-3"></i>
                            <div>
                                <h5 class="mb-1">Diseñador UX/UI</h5>
                                <small class="text-muted">Creativa Studio</small>
                            </div>
                        </div>
                        <p class="mb-2"><i class="fa fa-map-marker-alt text-primary me-2"></i>Medellín, Colombia</p>
                        <p class="mb-2"><i class="fa fa-clock text-primary me-2"></i>Híbrido</p>
                        <p class="mb-3"><i class="fa fa-calendar-alt text-primary me-2"></i>Postulado el: 2 Nov 2025</p>
                        <button class="btn btn-outline-primary w-100" data-bs-toggle="modal" data-bs-target="#applicationModal2">Ver más</button>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Modal Detalle Postulación 1 -->
    <div class="modal fade" id="applicationModal1" tabindex="-1" aria-labelledby="applicationModal1Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="applicationModal1Label">Detalle de Postulación - Desarrollador Full Stack</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>
                <div class="modal-body">
                    <p><strong>Empresa:</strong> TechCorp S.A.</p>
                    <p><strong>Ubicación:</strong> Bogotá, Colombia</p>
                    <p><strong>Modalidad:</strong> Tiempo completo</p>
                    <p><strong>Fecha de postulación:</strong> 10 Nov 2025</p>
                    <hr>
                    <h6>Descripción de la oferta</h6>
                    <p>Buscamos un desarrollador full stack con experiencia en Laravel, Vue.js y bases de datos MySQL.</p>

                    <h6>Estado del proceso</h6>
                    <p class="text-warning fw-bold">En revisión</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Detalle Postulación 2 -->
    <div class="modal fade" id="applicationModal2" tabindex="-1" aria-labelledby="applicationModal2Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="applicationModal2Label">Detalle de Postulación - Diseñador UX/UI</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>
                <div class="modal-body">
                    <p><strong>Empresa:</strong> Creativa Studio</p>
                    <p><strong>Ubicación:</strong> Medellín, Colombia</p>
                    <p><strong>Modalidad:</strong> Híbrido</p>
                    <p><strong>Fecha de postulación:</strong> 2 Nov 2025</p>
                    <hr>
                    <h6>Descripción de la oferta</h6>
                    <p>Estamos buscando un diseñador UX/UI con dominio en Figma y Adobe XD, enfocado en diseño centrado en el usuario.</p>

                    <h6>Estado del proceso</h6>
                    <p class="text-success fw-bold">Aceptada</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

</div>

@include('footer')
