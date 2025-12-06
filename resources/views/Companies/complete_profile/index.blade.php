@include("navbar")
<div class="container mt-5">
    <div class="card text-light shadow-lg rounded-4 p-4">
        <h3 class="text-center mb-4">Complete su perfil</h3>
        <form action='{{route('company.save_profile')}}' method="post">


            <div class='mb-3'>
                @csrf
                <label for="" class="form-label fw-bold text-dark">Usuario</label>
                <select name="user_id" id="" class="form-select border-0 rounded-3 shadow-sm">
                    <option>{{Auth::user()->name}}</option>
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

            </div>




        </form>
    </div>
</div>

@include('footer')