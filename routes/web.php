<?php

use App\Http\Controllers\AlunoController;
use App\Http\Controllers\AnotacaoTurmaController;
use App\Http\Controllers\BimestreController;
use App\Http\Controllers\TurmaController;
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

Route::get('/', function () {
    if(Auth::user()) {
        if(Auth::user()->tipo == 2) {
            return redirect(url('/coordenador'));
        }
        else {
            return redirect(url('/home'));
        }
    }
    else {
        return redirect(url('/login'));
    }
});

Route::get('/coordenador', function() {
    if(Auth::user()->tipo == 2) {
        return view('Conselho.Coordenador.layouts.base');
    }
    else {
        return redirect(url('/'));
    }
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

