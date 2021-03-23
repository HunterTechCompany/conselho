<?php

<<<<<<< HEAD
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\AnotacaoTurmaController;
use App\Http\Controllers\BimestreController;
use App\Http\Controllers\TurmaController;
use App\Models\Turma;
=======
>>>>>>> dd3f2ed796da87ee7bc3443506551bd7ea44297b
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
<<<<<<< HEAD
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/teste', [AlunoController::class, 'index']);

Route::post('/criar', [AlunoController::class, 'store']);
Route::get('/teste/criar', function(){
    return view('teste/criarAluno');
});

Route::get('/mostrar/{aluno}', [AlunoController::class, 'show']);
Route::get('/teste/mostrar', function(){
    return view('teste.mostrarAluno');
});

Route::get('/editar/{aluno}', [AlunoController::class, 'edit']);
Route::get('/teste/editar', function(){
    return view('teste.editAluno');
});
Route::patch('/editar', [AlunoController::class, 'update']);

Route::get('testando', [AlunoController::class, 'teste']);

Route::get('au', [TurmaController::class, 'index']);

Route::get('showTurma/{turma}', [TurmaController::class, 'show']);

Route::get('editarTurma/{turma}', [TurmaController::class, 'edit']);
Route::patch('updateTurma', [TurmaController::class, 'update']);

Route::get('bimestres', [BimestreController::class, 'index']);

Route::get('criarBimestre', function(){
    return view('teste.criarBimestre');
});
Route::post('salvarBimestre',  [BimestreController::class, 'store']);
Route::get('editarBimestre/{bimestre}', [BimestreController::class, 'edit']);
Route::patch('updateBimestre', [BimestreController::class, 'update']);

Route::get('/anotacoes/{turma}', [AnotacaoTurmaController::class, 'index']);

Route::get('/nota/{anotacao_turma}', [AnotacaoTurmaController::class, 'show']);

Route::get('/editAnotacao/{anotacao_turma}', [AnotacaoTurmaController::class, 'edit']);
Route::patch('/ediAno/{anotacao_turma}', [AnotacaoTurmaController::class, 'update']);


=======
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
>>>>>>> dd3f2ed796da87ee7bc3443506551bd7ea44297b
