<?php

use Illuminate\Support\Facades\Route;

//Controladores
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\LugaresController;
use App\Http\Controllers\EventosController;
use App\Http\Controllers\EntradasController;
use App\Http\Controllers\ReseniaController;

//RUTAS

//ROLES
Route::get('/listarRoles', [RolesController::class, 'index']);//Listar
Route::get('/listarRolesPorId/{id}', [RolesController::class, 'show']);//Listar por id
Route::post('/crearRoles', [RolesController::class, 'store']);//Crear
Route::delete('/borrarRoles/{id}', [RolesController::class, 'destroy']);//Borrar
Route::put('/actualizarRoles/{id}', [RolesController::class, 'update']);//actualizar

//USUARIOS
Route::get('/listarUsuarios', [UsuariosController::class, 'index']);//Listar
Route::get('/listarUsuarioPorId/{id}', [UsuariosController::class, 'show']);//Listar por id
Route::post('/crearUsuario', [UsuariosController::class, 'store']);//Crear
Route::delete('/borrarUsuario/{id}', [UsuariosController::class, 'destroy']);//Borrar
Route::put('/actualizarUsuario/{id}', [UsuariosController::class, 'update']);//actualizar

//LUGARES
Route::get('/listarLugares', [LugaresController::class, 'index']);//Listar
Route::get('/listarLugaresPorId/{id}', [LugaresController::class, 'show']);//Listar por id
Route::post('/crearLugar', [LugaresController::class, 'store']);//Crear
Route::delete('/borrarLugar/{id}', [LugaresController::class, 'destroy']);//Borrar
Route::put('/actualizarLugar/{id}', [LugaresController::class, 'update']);//actualizar

//CATEGORIAS
Route::get('/listarCategorias', [CategoriasController::class, 'index']);//Listar
Route::get('/listarCategoriasPorId/{id}', [CategoriasController::class, 'show']);//Listar por id
Route::post('/crearCategoria', [CategoriasController::class, 'store']);//Crear
Route::delete('/borrarCategoria/{id}', [CategoriasController::class, 'destroy']);//Borrar
Route::put('/actualizarCategoria/{id}', [CategoriasController::class, 'update']);//actualizar

//EVENTOS
Route::get('/listarEventos', [EventosController::class, 'index']);//Listar
Route::get('/listarEventosPorId/{id}', [EventosController::class, 'show']);//Listar por id
Route::post('/crearEvento', [EventosController::class, 'store']);//Crear
Route::delete('/borrarEvento/{id}', [EventosController::class, 'destroy']);//Borrar
Route::put('/actualizarEvento/{id}', [EventosController::class, 'update']);//actualizar

//ENTRADAS
Route::get('/listarEntradas', [EntradasController::class, 'index']);//Listar
Route::get('/listarEntradasPorId/{id}', [EntradasController::class, 'show']);//Listar por id
Route::post('/crearEntrada', [EntradasController::class, 'store']);//Crear
Route::delete('/borrarEntrada/{id}', [EntradasController::class, 'destroy']);//Borrar
Route::put('/actualizarEntrada/{id}', [EntradasController::class, 'update']);//actualizar

//RESEÑAS
Route::get('/listarResenias', [ReseniaController::class, 'index']);//Listar
Route::get('/listarReseniaPorId/{id}', [ReseniaController::class, 'show']);//Listar por id
Route::post('/crearResenia', [ReseniaController::class, 'store']);//Crear
Route::delete('/borrarResenia/{id}', [ReseniaController::class, 'destroy']);//Borrar
Route::put('/actualizarResenia/{id}', [ReseniaController::class, 'update']);//actualizar


