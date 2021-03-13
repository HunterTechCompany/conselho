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

Route::get('/gerenciarturmaespecifica', function () {
    return view('Conselho/Administrador/usuarios/GerenciarTurmaEspecifica/GerenciarTurmaEspecifica');
});

Route::get('/gerenciarturma', function () {
    return view('Conselho/Administrador/usuarios/GerenciarTurma/GerenciarTurma');
});

Route::get('/editarturma', function () {
    return view('Conselho/Administrador/usuarios/EditarTurma/EditarTurma');
});

Route::get('/usuario', function () {
    return view('Conselho/Administrador/usuarios/Usuario/Usuarios');
});

Route::get('/adicionarusuario', function () {
    return view('Conselho/Administrador/usuarios/AdicionarUsuario/AdicionarNovoUsuario');
});

Route::get('/editarusuario', function () {
    return view('Conselho/Administrador/usuarios/EditarUsuario/EditarUsuario');
});

Route::get('/curso', function () {
    return view('Conselho/Administrador/usuarios/Curso/Cursos');
});

Route::get('/editarcurso', function () {
    return view('Conselho/Administrador/usuarios/EditarCurso/EditarCurso');
});

Route::get('/adicionarcurso', function () {
    return view('Conselho/Administrador/usuarios/AdicionarCurso/AdicionarNovoCurso');
});

//Coordenador:


Route::get('/editaraluno/{matricula}',[App\Http\Controllers\VisualizarAlunoController::class, 'edit'])->name('editaraluno');

Route::get('/excluiraluno/{matricula}',[App\Http\Controllers\VisualizarAlunoController::class, 'destroy'])->name('excluir');

Route::get('/visualizaralunos',[App\Http\Controllers\VisualizarAlunoController::class, 'index']);

Route::post('/salvaraluno',[App\Http\Controllers\VisualizarAlunoController::class, 'store'])->name('salvaraluno');

Route::post('/alunoeditado/{matricula}',[App\Http\Controllers\VisualizarAlunoController::class, 'update'])->name('alunoeditado');

Route::get('/adicionaraluno',[App\Http\Controllers\VisualizarAlunoController::class, 'index2']);

Route::get('/detalhesaluno', function () {
    return view('Conselho/Coordenador/DetalhesAluno/DetalhesAluno');
});

Route::get('/editaraluno', function () {
    return view('Conselho/Coordenador/EditarAluno/EditarAluno');
});

Route::get('/editaranotacao/{id}',[App\Http\Controllers\AnotacaoTurmaController::class, 'edit'])->name('editaranotacao');
Route::get('/excluir/{id}',[App\Http\Controllers\AnotacaoTurmaController::class, 'destroy'])->name('excluir');
Route::post('/salvar',[App\Http\Controllers\AnotacaoTurmaController::class, 'store'])->name('anotacoesturma');
Route::post('/editar/{id}',[App\Http\Controllers\AnotacaoTurmaController::class, 'update'])->name('editar');
Route::get('/anotacoesturma',[App\Http\Controllers\AnotacaoTurmaController::class, 'index']);

Route::get('/adicionaranotacao', function () {
    return view('Conselho/Coordenador/AnotacoesTurma/AdicionarAnotacao');
});


Route::get('/importarplanilha', function () {
    return view('Conselho/Coordenador/ImportarPlanilha/ImportarPlanilha');
});

Route::get('/gerenciaraluno',[App\Http\Controllers\GerenciarAlunoController::class, 'index']);

Route::get('/selecaoturmas', function () {
    return view('Conselho/Coordenador/SelecaoTurmas/SelecaoTurmas');
});

Route::get('/desempenhodisciplina', function () {
    return view('Conselho/Coordenador/DesempenhoDisciplina/DesempenhoDisciplina');
});

Route::get('/desempenhoturma', function () {
    return view('Conselho/Coordenador/DesempenhoTurma/DesempenhoTurma');
});

Route::get('/evasaoturma', function () {
    return view('Conselho/Coordenador/EvasaoTurma/EvasaoTurma');
});