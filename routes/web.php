<?php

use App\Http\Controllers\AlunoController;
use App\Http\Controllers\AnotacaoTurmaController;
use App\Http\Controllers\BimestreController;
use App\Http\Controllers\TurmaController;
use App\Http\Controllers\RoutesController;
use App\Models\Turma;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use League\CommonMark\Block\Element\Document;

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

Route::get('/', [RoutesController::class, 'login']);

Route::get('/coordenador', [RoutesController::class, 'identificacao']);

Route::get('/coordenador/gerenciar-turmas', [TurmaController::class, 'index']);

Route::get('/coordenador/gerenciar-turmas/gerenciar/{turma}', [TurmaController::class, 'show']);

Route::get('/coordenador/gerenciar-turmas/editar/{turma}', [TurmaController::class, 'edit']);

Route::patch('/coordenador/gerenciar-turmas/update', [TurmaController::class, 'update']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
