@include("navbar")
<div class="container mt-5">
    <div class="card shadow-lg rounded-4 p-4">
        <h3 class="text-center mb-4">Complete su perfli</h3>


        <form action="{{route("candidate.save_profile")}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="user_id" class="form-label fw-bold">Nombre de usuario</label>
                <select name="user_id" id="user_id" 
                        class="form-select border-0 rounded-3 shadow-sm">
                    <option value="">{{Auth::user()->name}}</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="document" class="form-label fw-bold">Documento</label>
                <input type="text" name="document" id="document"
                       class="form-control  border-0 rounded-3 shadow-sm" placeholder="Ingrese su documento">
            </div>

            <div class="mb-3">
                <label for="name" class="form-label fw-bold">Nombre Completo</label>
                <input type="text" name="name" id="name"
                       class="form-control  border-0 rounded-3 shadow-sm" placeholder="Ingrese su nombre">
            </div>

            <div class="mb-3">
                <label for="birthdate" class="form-label fw-bold">Fecha Nacimiento</label>
                <input type="date" name="birthdate" 
                       class="form-control border-0 rounded-3 shadow-sm" placeholder="Ingrese su fecha de nacimiento ">
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label fw-bold">Telefono</label>
                <input type="text" name="phone" id="phone" 
                       class="form-control border-0 rounded-3 shadow-sm" placeholder="Ingrese su telefono">
            </div>
            
            <div class="mb-3">
                <label for="deparment" class="form-label fw-bold">Departamento</label>
                <input type="text" name="deparment" id="deparment" 
                       class="form-control border-0 rounded-3 shadow-sm" placeholder="Ingrese su departamento">
            </div>

            <div class="mb-3">
                <label for="city" class="form-label fw-bold">Ciudad</label>
                <input type="text" name="city" id="city" 
                       class="form-control border-0 rounded-3 shadow-sm" placeholder="Ingrese su ciudad">
            </div>

            <div class="mb-3">
                <label for="city" class="form-label fw-bold">Cargo</label>
                <input type="text" name="job_title" id="job_title" 
                       class="form-control border-0 rounded-3 shadow-sm" placeholder="Ingrese su cargo">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label fw-bold">Descripcion</label>
                <input type="text" name="description" id="description" 
                       class="form-control border-0 rounded-3 shadow-sm" placeholder="Ingrese su descripcion">
            </div>

            <div class="mb-3">
                <label for="can_travel" class="form-label fw-bold">¿Puede viajar?</label>
                <select name="can_travel" id="can_travel" 
                        class="form-select border-0 rounded-3 shadow-sm">
                    <option value="" selected disabled>Seleccione si o no</option>
                    <option value="yes">Si</option>
                    <option value="no">No</option>
                </select>
            </div>

            <div class="text-center mt-4">
                <button type="submit" class="btn btn-warning px-4 py-2 fw-semibold shadow-sm">
                    <i class="bi bi-check-circle"></i> Guardar 
                </button>
            </div>

        </form>
    </div>
</div>

@include("footer")