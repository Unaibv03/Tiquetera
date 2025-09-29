<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Vista por defecto del login
Route::get('/login', function () {
    return view('loginIniciar');
})->name('loginInicial');

//Vista por defecto de crear la cuenta desde el login
Route::get('/crearCuentaLogin', function () {
    return view('crearCuentaLogin');
});

Route::get('/index', function () {
    return view('inicial');
});

//Vista de una vez creada la cuenta para confirmarlo
use App\Http\Controllers\CrearCuentaController;
use App\Http\Controllers\UsuariosController;

//Cuando desde crear cuenta has podido iniciar sesión
Route::post('/loginCuentaCreada', [UsuariosController::class, 'store'])->name('loginCuentaCreada');

//Cuando desde crear cuenta has podido iniciar sesión
Route::get('/cuentaCreadaExito', function () {
    return view('cuentaCreada');
})->name('cuentaCreadaExito');

Route::get('/cuentaNoCreada', function () {
    return view('noPudoCrearCuenta');
})->name('cuentaNoCreada');

