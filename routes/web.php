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
Route::get('/ge', function () {
    return view('Conselho/Administrador/usuarios/GerenciarTurma/GerenciarTurmaEspecifica');
});
Route::get('/editarturma', function () {
    return view('Conselho/Administrador/usuarios/editar/EditarTurma');
});

Route::get('/usuario', function () {
    return view('Conselho/Administrador/usuarios/Usuario/Usuarios');
});
Route::get('/adicionarusuario', function () {
    return view('Conselho/Administrador/usuarios/Usuario/AdicionarNovoUsuario');
});
Route::get('/editarusuario', function () {
    return view('Conselho/Administrador/usuarios/editar/EditarUsuario');
});
Route::get('/curso', function () {
    return view('Conselho/Administrador/usuarios/Curso/Cursos');
});
Route::get('/gerenciarturma', function () {
    return view('Conselho/Administrador/usuarios/GerenciarTurma/GerenciarTurma');
});
Route::get('/editarcurso', function () {
    return view('Conselho/Administrador/usuarios/editar/EditarCurso');
});

Route::get('/adicionarcurso', function () {
    return view('Conselho/Administrador/usuarios/Curso/AdicionarNovoCurso');
});
