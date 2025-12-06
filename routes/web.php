<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\StudyController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\CV_ReportController;
use App\Http\Controllers\UserAvatarController;
use App\Http\Controllers\ProfileController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
})->name("home");


Route::middleware(['auth', 'role:admin|company'])->group(function () {
    
    //Rutas para las que se requiere autenticación y rol de admin

    //Dashboard admin
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name("admin.dashboard");


    //Rutas CRUD Empresa 
    Route::get('/companies',[CompanyController::class, 'index'] )->name('companies.index');
    Route::post('/companies',[CompanyController::class, 'store'] )->name('companies.store');
    Route::get('/companies/{id}',[CompanyController::class, 'edit'] )->name('companies.edit');
    Route::put('/companies/{id}',[CompanyController::class, 'update'] )->name('companies.update');
    Route::delete('/companies/{id}',[CompanyController::class, 'destroy'] )->name('companies.destroy');

    //Rutas CRUD Usuarios
    Route::get('/users', [UserController::class, 'index'])->name("users.index");
    Route::post('/users', [UserController::class, 'store'])->name("users.store");
    Route::delete('/users/{id}', [UserController::class, 'destroy'])->name("users.destroy");
    Route::get('/users/{id}', [UserController::class, 'edit'])->name("users.edit");
    Route::put('/users/{id}', [UserController::class, 'update'])->name("users.update");

    //Rutas CRUD Candidato
    Route::get('/candidates', [CandidateController::class, 'index'])->name("candidates.index");
    Route::post('/candidates', [CandidateController::class, 'store'])->name("candidates.store");
    Route::delete('/candidates/{id}', [CandidateController::class, 'destroy'])->name("candidates.destroy");
    Route::get('/candidates/{id}', [CandidateController::class, 'edit'])->name("candidates.edit");
    Route::put('candidates/{id}', [CandidateController::class, 'update'])->name("candidates.update");


    //Rutas CRUD Ofertas

    Route::get('/offers',[OfferController::class,'index'])->name("offers.index");
    Route::post('/offers',[OfferController::class, 'store'])->name("offers.store");
    Route::get('/offers/{id}/edit',[OfferController::class, 'edit'])->name("offers.edit");
    Route::put('/offers/{id}',[OfferController::class, 'update'])->name("offers.update");
    Route::delete('/offers/{id}',[OfferController::class, 'destroy'])->name("offers.destroy");

    //Rutas CRUD Estudios
    Route::get('/studies', [StudyController::class, 'index'])->name("studies.index");
    Route::post('/studies', [StudyController::class, 'store'])->name("studies.store");
    Route::delete('/studies/{id}', [StudyController::class, 'destroy'])->name("studies.destroy");
    Route::get('/studies/{id}', [StudyController::class, 'edit'])->name("studies.edit");
    Route::put('studies/{id}', [StudyController::class, 'update'])->name("studies.update");

    //Rutas CRUD Roles
    Route::get('/roles', [RoleController::class, 'index'])->name("roles.index");
    Route::post('/roles', [RoleController::class, 'store'])->name("roles.store");
    Route::delete('/roles/{id}', [RoleController::class, 'destroy'])->name("roles.destroy");
    Route::get('/roles/{id}', [RoleController::class, 'edit'])->name("roles.edit");
    Route::put('roles/{id}', [RoleController::class, 'update'])->name("roles.update");


    //Rutas CRUD Postulaciones
    Route::get('/applications', [ApplicationController::class, 'index'])->name("applications.index");
    Route::post('/applications', [ApplicationController::class, 'store'])->name("applications.store");
    Route::delete('/applications/{id}', [ApplicationController::class, 'destroy'])->name("applications.destroy");
    Route::get('/applications/{id}', [ApplicationController::class, 'edit'])->name("applications.edit");
    Route::put('applications/{id}', [ApplicationController::class, 'update'])->name("applications.update");

    //Rutas CRUD Experiencia
    Route::get('/experiences', [ExperienceController::class, 'index'])->name("experiences.index");
    Route::post('/experiences', [ExperienceController::class, 'store'])->name("experiences.store");
    Route::delete('/experiences/{id}', [ExperienceController::class, 'destroy'])->name("experiences.destroy");
    Route::get('/experiences/{id}', [ExperienceController::class, 'edit'])->name("experiences.edit");
    Route::put('experiences/{id}', [ExperienceController::class, 'update'])->name("experiences.update");

});





Auth::routes();

Route::middleware(['auth', 'role:company'])->group(function () {
    //Rutas para las que se requiere autenticación y rol de empresa

    //Dashboard empresa

    //Mostrar dashboard empresa
    Route::get('/company/dashboard', [CompanyController::class, 'dashboard'])->name("company.dashboard");

    //Ruta cargar ofertas publicadas para empresa en el dashboard
    Route::get('/company/published_offers', [CompanyController::class, 'published_offers'])->name("company.published_offers");

    //Ruta cargar las postulaciones recibidas para empresa en el dashboard
    Route::get('/company/recieved_applications', [CompanyController::class, 'recieved_applications'])->name("company.recieved_applications");

    //Completar perfil empresa
    Route::get('/company/complete_profile', [CompanyController::class, 'complete_profile'])->name("company.complete_profile");
    Route::post('/company/complete_profile',[CompanyController::class, 'save_profile'])->name("company.save_profile");

    //Rutas para el perfil de la empresa tipo crud
    Route::get('/company/profile', [CompanyController::class, 'profile'])->name('company.profile');
    Route::get('/company/company_offer', [CompanyController::class, 'offer'])->name('company.offer');
    Route::put('/companies_update/{id}',[CompanyController::class, 'updateProfile'] )->name('companies.updateProfile');
    Route::delete('/company_offers/{id}',[CompanyController::class, 'company_delete_offer'])->name("company.delete_offer");
    Route::post('/company_offers',[CompanyController::class, 'storeOfferCompany'])->name("offers.storeCompany");

    // Mostrar formulario de edición de una oferta
    Route::get('/company/offers/{id}/edit',[CompanyController::class, 'company_edit_offer_view'])->name('company.offers.edit');

    // Actualizar la oferta
    Route::put('/company/offers/{id}',[CompanyController::class, 'company_update_offer'])->name('company.offers.update');

    // Eliminar una postulación o rechazar una oferta
    Route::delete('/company_offers/{id}/delete',[CompanyController::class, 'deletePostulation'])->name("company.delete.postulation");

    //Cambiar estado  de una postulación
    Route::get('/company/applications/{id}', [CompanyController::class, 'company_edit_application_view'])->name("company.applications.edit");
    Route::put('/company/applications/{id}', [CompanyController::class, 'company_update_application'])->name("company.applications.update");

    //Ruta PDF generar hoja de vida
    Route::get('/candidate/cv_pdf/{user_id}', [CV_ReportController::class, 'generarPDF'])->name("cv_report");   

    
});

Route::middleware(['auth', 'role:candidate'])->group(function () {

    //Rutas dashboard
    Route::get('/candidate/dashboard', [CandidateController::class, 'dashboard'])->name("candidate.dashboard");

    //Rutas completar perfil
    Route::get('/candidate/complete_profile', [CandidateController::class, 'complete_profile'])->name("candidate.complete_profile");
    Route::post('/candidate/complete_profile',[CandidateController::class, 'save_profile'])->name("candidate.save_profile");


    //Ruta cargar ofertas
    Route::get('/candidate/offers', [CandidateController::class, 'show_offers'])->name("candidate.show_offers");

    //Ruta cargar postulaciones del candidato
    Route::get('/candidate/myapplications', [CandidateController::class, 'show_applications'])->name("candidate.show_applications");

    //Rutas cruds dashboard ofertas


    //Rutas para editar perfil del candidato
    Route::get('/candidate/edit_profile', [CandidateController::class, 'editProfile'])->name('candidate.profile.edit');
    Route::put('/candidate/profile/update', [CandidateController::class, 'updateProfile'])->name('candidate.profile.update');

    //Ruta para guardar una postulacion
    Route::post('/candidate/applications', [ApplicationController::class, 'store_application'])->name('store.application');

    //Ruta para agregar estudio de un candidato
    Route::get('/candidates/{candidate}/studies/create', [StudyController::class, 'createForCandidate'])->name('candidates.studies.create');
    Route::post('/studies_save', [StudyController::class, 'store'])->name('candidateStudies.store');

    //Ruta para agregar experiencia de un candidato
    Route::get('/candidates/{id}/experiences/create', [ExperienceController::class, 'create_experience_candidate'])->name('candidates.experiences.create');
    Route::post('/experiences_save', [ExperienceController::class, 'store'])->name('candidate_experiences.store');

    //Ruta para ver las postulaciones del candidato
    Route::get('/candidate/my_applications', [CandidateController::class, 'show_applications'])->name('candidate.show_applications');

    //Ruta para editar experiencia del candidato
    Route::get('/candidate/edit_experiences/{id}', [ExperienceController::class, 'editExperienceCandidate'])->name("candidates.editExperienceCandidate");
    Route::put('candidate_experiences/{id}', [ExperienceController::class, 'update'])->name("candidateExperiences.update");


    //Ruta para editar estudio del candidato
    Route::get('/candidate/edit_studies/{id}', [StudyController::class, 'editStudiesCandidate'])->name("candidate.editStudiesCandidate");
    Route::put('/candidate_update_studies/{id}', [StudyController::class, 'update'])->name("candidateStudies.update");

    //Ruta para eliminar estudio del candidato
    Route::delete('/candidate_delete_studies/{id}', [StudyController::class, 'destroy'])->name("candidateStudies.destroy");
    //Ruta para eliminar experiencia del candidato
    Route::delete('/candidate_edit_experiences/{id}', [ExperienceController::class, 'destroy'])->name("candidateExperiences.destroy");

    //Ruta para el pdf de las ofertas postuladas del candidato
    Route::get('/candidate/applications/pdf', [CandidateController::class, 'applicationsPdf'])->name('candidate.applications.pdf');
});


//Para el API del Avatar 
//Ruta para actualizar la foto de perfil 
Route::middleware(['auth'])->group(function () {
    Route::post('/user/update-photo', [UserController::class, 'updatePhoto'])->name('user.updatePhoto');
});
