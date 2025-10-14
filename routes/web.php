<?php

use Illuminate\Support\Facades\Route;

//Eventos
use App\Models\EventosModel;

Route::get('/', function () {
    return view('welcome');
});

//Vista por defecto del login
Route::get('/login', function () {
    return view('loginIniciar');
})->name('login');

//Vista por defecto de crear la cuenta desde el login
Route::get('/crearCuentaLogin', function () {
    return view('crearCuentaLogin');
})->name('crearCuenta');

Route::get('/index', function () {
    return view('inicial');
})->name('inicial');;

//Vista de una vez creada la cuenta para confirmarlo
use App\Http\Controllers\CrearCuentaController;
use App\Http\Controllers\UsuariosController;

//Cuando desde crear cuenta has podido iniciar sesión (CONTROLADOR, sin este controlador no podríamos hacer el control de errores)
Route::post('/loginCuentaCreada', [UsuariosController::class, 'store'])->name('loginCuentaCreada');

//Cuando desde crear cuenta has podido iniciar sesión (CAMBIAR VISTA, aquí lo que hacemos es decirle, una vez ha pasado por el controlador, qué vista es la que queremos mostrar, MUY importante darles name a las rutas, sino no las redirigirá)
Route::get('/cuentaCreadaExito', function () {
    return view('cuentaCreada');
})->name('cuentaCreadaExito');

//Lo mismo, en este caso si el usuario está ya logeado en la base de datos, no podemos iniciar sesión en la página web
Route::get('/cuentaNoCreada', function () {
    return view('noPudoCrearCuenta');
})->name('cuentaNoCreada'); //Todo esto sin mostrar datos del usuario para que no sea insegura la página

//Cuando el usuario está intentando iniciar sesión y lo comprobamos
Route::post('/iniciarSesion', [UsuariosController::class, 'login'])->name('iniciarSesion');

//Cerrar sesion
Route::post('/logout', [UsuariosController::class, 'logout'])->name('logout');

//Al intentar iniciar sesión pero no poner bien las credenciales
Route::get('/sesionNoIniciada', function () {
    return view('noPudoIniciarSesion');
})->name('sesionNoIniciada');



//EVENTOS

//Futbol
Route::get('/futbol', function(){
    return view ('eventos.futbol');
})->name('futbol');

//Bailes
Route::get('/bailes de salon', function(){
    return view ('eventos.bailes');
})->name('bailes de salon');

//Bolos
Route::get('/bolos', function(){
    return view ('eventos.bolos');
})->name('bolos');

//Autocine
Route::get('/autocine', function(){
    return view ('eventos.autocine');
})->name('autocine');

//Buffets
Route::get('/buffets', function(){
    return view ('eventos.buffets');
})->name('buffets');

//Karaoke
Route::get('/karaoke', function(){
    return view ('eventos.karaoke');
})->name('karaoke');

//Museos
Route::get('/museos', function(){
    return view ('eventos.museos');
})->name('museos');

//Patinaje
Route::get('/patinaje', function(){
    return view ('eventos.patinaje');
})->name('patinaje');

//Recreativos
Route::get('/recreativos', function(){
    return view ('eventos.recreativos');
})->name('recreativos');

//Tours
Route::get('/tour guiado', function(){
    return view ('eventos.tours');
})->name('tour guiado');

//Conciertos
Route::get('/concierto', function(){
    return view('eventos.conciertos');
})->name('concierto');

//Página de eventos
Route::get('/eventos/todosLosEventos', function(){
    return view('eventos.todosLosEventos');
})->name('todosLosEventos');


//Para poder interactuar con eventos
Route::get('/todosLosEventos', function(){
    $eventos = EventosModel::all();
    return view('eventos.todosLosEventos', compact('eventos'));
})->name('eventos');



//Pruebas
Route::get('/prueba', function () {
    return auth()->check() ? 'Estás autenticado' : 'No estás autenticado';
});

//Protegemos las rutas que queramos para que solo las vean usuarios logeados
use App\Http\Controllers\EntradasController;

//Gestión de las compras y perfiles


//Carrito
Route::get('/carrito', function(){
    return view ('entradas.carrito');
})->name('carrito');

//Perfil
Route::get('/perfil', function(){
    return view ('perfil.perfil');
})->name('perfil');



