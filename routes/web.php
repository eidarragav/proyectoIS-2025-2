<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\StudyController;
use App\Http\Controllers\UserController;

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
})->name('home');

//Rutas CRUD Roles
Route::get('/roles', [RoleController::class, 'index'])->name("roles.index");
Route::post('/roles', [RoleController::class, 'store'])->name("roles.store");
Route::delete('/roles/{id}', [RoleController::class, 'destroy'])->name("roles.destroy");
Route::get('/roles/{id}', [RoleController::class, 'edit'])->name("roles.edit");
Route::put('roles/{id}', [RoleController::class, 'update'])->name("roles.update");

//Rutas CRUD User
Route::get('/users', [UserController::class, 'index'])->name("users.index");
Route::post('/users', [UserController::class, 'store'])->name("users.store");
Route::delete('/users/{id}', [UserController::class, 'destroy'])->name("users.destroy");
Route::get('/users/{id}', [UserController::class, 'edit'])->name("users.edit");
Route::put('/users/{id}', [UserController::class, 'update'])->name("users.update");

//Rutas CRUD Empresa 
Route::get('/companies',[CompanyController::class, 'index'] )->name('companies.index');
Route::post('/companies',[CompanyController::class, 'store'] )->name('companies.store');
Route::get('/companies/{id}',[CompanyController::class, 'edit'] )->name('companies.edit');
Route::put('/companies/{id}',[CompanyController::class, 'update'] )->name('companies.update');
Route::delete('/companies/{id}',[CompanyController::class, 'destroy'] )->name('companies.destroy');

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

//Rutas CRUD Experiencia
Route::get('/experiences', [ExperienceController::class, 'index'])->name("experiences.index");
Route::post('/experiences', [ExperienceController::class, 'store'])->name("experiences.store");
Route::delete('/experiences/{id}', [ExperienceController::class, 'destroy'])->name("experiences.destroy");
Route::get('/experiences/{id}', [ExperienceController::class, 'edit'])->name("experiences.edit");
Route::put('experiences/{id}', [ExperienceController::class, 'update'])->name("experiences.update");

//Rutas CRUD Postulaciones
Route::get('/applications', [ApplicationController::class, 'index'])->name("applications.index");
Route::post('/applications', [ApplicationController::class, 'store'])->name("applications.store");
Route::delete('/applications/{id}', [ApplicationController::class, 'destroy'])->name("applications.destroy");
Route::get('/applications/{id}', [ApplicationController::class, 'edit'])->name("applications.edit");
Route::put('applications/{id}', [ApplicationController::class, 'update'])->name("applications.update");

//Rutas CRUD Estudios
Route::get('/studies', [StudyController::class, 'index'])->name("studies.index");
Route::post('/studies', [StudyController::class, 'store'])->name("studies.store");
Route::delete('/studies/{id}', [StudyController::class, 'destroy'])->name("studies.destroy");
Route::get('/studies/{id}', [StudyController::class, 'edit'])->name("studies.edit");
Route::put('studies/{id}', [StudyController::class, 'update'])->name("studies.update");