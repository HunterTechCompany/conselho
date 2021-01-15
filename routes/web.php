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
    return view('Conselho/Administrador/layout/layout');
});

//Rotas-Marcos
Route::get('/g', function () {
    return view('Conselho/Administrador/layout/GerenciarTurma');
});
Route::get('/ge', function () {
    return view('Conselho/Administrador/layout/GerenciarTurmaEspecifica');
});
Route::get('/gte', function () {
    return view('Conselho/Administrador/layout/EditarTurmaEspecifica');
});

Route::get('/u', function () {
    return view('Conselho/Administrador/layout/Usuarios');
});
Route::get('/ue', function () {
    return view('Conselho/Administrador/layout/EditarUsuario');
});
Route::get('/c', function () {
    return view('Conselho/Administrador/layout/Cursos');
});
Route::get('/ce', function () {
    return view('Conselho/Administrador/usuarios/GerenciarTurma/GerenciarTurma');
});
Route::get('/app', function () {
    return view('Conselho/Administrador/layout/app');
});
