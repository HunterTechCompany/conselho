<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Turma;

class RoutesController extends Controller
{
    public function login() {
        if(Auth::user()) {
            if(Auth::user()->tipo == 2) {
                return redirect(url('/coordenador'));
            } else {
                return redirect(url('/home'));
            }
        } else {
            return redirect(url('/login'));
        }
    }

    public function identificacao() {
        if(Auth::user()->tipo == 2) {
            $turmas = DB::select('SELECT DISTINCT turmas.* FROM turmas
            INNER JOIN users_turmas ON turmas.id = users_turmas.id_turma
            INNER JOIN users ON users_turmas.id_usuario = '. Auth::user()->id);
            return view('Conselho.Coordenador.layouts.base', compact('turmas'));
        } else {
            return redirect(url('/home'));
        }
    }
}
