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
    return view("Conselho.Administrador.layout.layout");
});

Route::get('/teste', function(){
    return view("Conselho.Administrador.Atendimentos.tipos_de_atendimentos.tipos");
});

Route::get('/teste2', function(){
    return view("Conselho.Administrador.Atendimentos.criar&editar_atendimentos.criar&editar");
});

Route::get('/teste3', function(){
    return view("Conselho.Administrador.Advertencias.criar&editar_advertencias.criar&editar");
});

Route::get('/teste4', function(){
    return view("Conselho.Administrador.Advertencias.tipos_de_advertencia.tipos");
});

Route::get('/teste5', function(){
    return view("Conselho.Administrador.Disciplinas.disciplinas.disciplinas");
});

Route::get('/teste6', function(){
    return view("Conselho.Administrador.Disciplinas.criar&editar_disciplina.criar&editar");
});
