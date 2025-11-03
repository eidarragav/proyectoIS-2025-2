<?php

use Illuminate\Support\Facades\Route;

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
});

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