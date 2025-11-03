@include("navbar")

<!-- Hero principal -->
<div class="container-fluid bg-primary py-5 mb-5 hero-header">
  <div class="container py-5 text-center">
    <h1 class="display-3 text-white mb-4 animated slideInDown">Tu futuro laboral comienza aquí</h1>
    <p class="fs-5 fw-medium text-white mb-4 pb-2">
      Encuentra oportunidades laborales, conecta con empresas y crece profesionalmente.
    </p>
    <a href="#jobs" class="btn btn-dark py-3 px-5">Registrate WIP</a>
  </div>
</div>

<!-- Sección: Quiénes somos -->
<div class="container-xxl py-5" id="about">
  <div class="container">
    <div class="row g-5 align-items-center">
      <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
        <img src="{{ asset('images/working.png') }}" class="img-fluid rounded" alt="Nosotros">
      </div>
      <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
        <h2 class="mb-4">Quiénes Somos</h2>
        <p class="mb-4">
          Somos una plataforma dedicada a conectar el talento con las mejores empresas del país. Nuestro propósito es facilitar el acceso a oportunidades laborales, promoviendo el crecimiento profesional y la empleabilidad.
        </p>
        <p><i class="fa fa-check text-primary me-3"></i>Publicación gratuita de empleos</p>
        <p><i class="fa fa-check text-primary me-3"></i>Conexión directa entre candidatos y empresas</p>
        <p><i class="fa fa-check text-primary me-3"></i>Filtros inteligentes para encontrar el trabajo ideal</p>
      </div>
    </div>
  </div>
</div>

<!-- Sección: Cómo funciona -->
<div class="container-xxl py-5 bg-light" id="how">
  <div class="container text-center">
    <h2 class="mb-5 wow fadeInUp" data-wow-delay="0.1s">¿Cómo Funciona?</h2>
    <div class="row g-4 justify-content-center">
      <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
        <div class="bg-white rounded p-4 shadow-sm">
          <div class="btn btn-primary btn-lg-square mb-3"><i class="fa fa-user-plus"></i></div>
          <h5>Regístrate</h5>
          <p>Crea tu perfil profesional en minutos y destaca tus habilidades.</p>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
        <div class="bg-white rounded p-4 shadow-sm">
          <div class="btn btn-primary btn-lg-square mb-3"><i class="fa fa-search"></i></div>
          <h5>Busca Empleos</h5>
          <p>Encuentra ofertas ajustadas a tu perfil y ubicación.</p>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
        <div class="bg-white rounded p-4 shadow-sm">
          <div class="btn btn-primary btn-lg-square mb-3"><i class="fa fa-paper-plane"></i></div>
          <h5>Postúlate</h5>
          <p>Aplica directamente a las vacantes que más te interesen.</p>
        </div>
      </div>
    </div>
  </div>
</div>



<!-- Sección: Empresas Aliadas -->
<div class="container-xxl py-5 bg-light" id="partners">
  <div class="container text-center">
    <h2 class="mb-5 wow fadeInUp" data-wow-delay="0.1s">Empresas Aliadas</h2>
    <div class="row g-4 align-items-center justify-content-center">
      <div class="col-4 col-md-2 wow fadeInUp" data-wow-delay="0.1s">
        <img src="{{ asset('images/adidas.png') }}" class="img-fluid grayscale" alt="Empresa">
      </div>
      <div class="col-4 col-md-2 wow fadeInUp" data-wow-delay="0.3s">
        <img src="{{ asset('images/metallica.png') }}" class="img-fluid grayscale" alt="Empresa">
      </div>
      <div class="col-4 col-md-2 wow fadeInUp" data-wow-delay="0.5s">
        <img src="{{ asset('images/nike.png') }}" class="img-fluid grayscale" alt="Empresa">
      </div>
    </div>
  </div>
</div>

<!-- Sección: Testimonios -->
<div class="container-xxl py-5" id="testimonios">
  <div class="container">
    <h2 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Testimonios</h2>
    <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.3s">
      <div class="testimonial-item bg-light rounded p-4">
        <p>Gracias a esta plataforma encontré un trabajo en menos de una semana. Es muy fácil de usar y las empresas responden rápido.</p>
        <h6 class="text-primary mt-3">— Laura Gómez</h6>
      </div>
      <div class="testimonial-item bg-light rounded p-4">
        <p>Publicar vacantes fue muy sencillo. Recibimos muchos candidatos calificados en poco tiempo.</p>
        <h6 class="text-primary mt-3">— Juan Pérez, HR Manager</h6>
      </div>
    </div>
  </div>
</div>


@include("footer")

