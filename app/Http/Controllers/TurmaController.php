<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Turma;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;


class TurmaController extends Controller
{

    public function __construct()
    {
        if(!Auth::user()) {
            return redirect(url('/login'));
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dados = DB::select('SELECT turmas.id, turmas.turma, turmas.modalidade, turmas.ano, turmas.status FROM turmas INNER JOIN users_turmas ON users_turmas.id_turma = turmas.id AND users_turmas.id_usuario = '.Auth::user()->id.' ORDER BY turmas.turma');
        return view('Conselho.Coordenador.Turmas.gerenciar__turmas', compact('dados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Turma  $turma
     * @return \Illuminate\Http\Response
     */
    public function show(Turma $turma)
    {
        return view('Conselho.Coordenador.Turmas.detalhes__turma', compact('turma'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Turma  $turma
     * @return \Illuminate\Http\Response
     */
    public function edit(Turma $turma)
    {
        $cursos = Curso::all();
        $dados = [
            'chave' => $turma->id,
            'turma' => $turma->turma,
            'modalidade' => $turma->modalidade,
            'ano' => $turma->ano,
            'curso' => $turma->id_curso
        ];

        $dados = (object)$dados;

        return view('Conselho.Coordenador.Turmas.editar__turma', compact('dados', 'cursos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Turma  $turma
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Turma $turma)
    {

        $turma = Turma::where('id', $request->chave)->first();

        if(request('status') !== null) {
            if(request('status') == 0) {
                $turma->status = 1;
            } elseif(request('status') == 1) {
                $turma->status = 0;
            } else {
                return;
            }
            $turma->save();
            return redirect(url('/coordenador/gerenciar-turmas'));
        }

        $turma->turma = $request->turma;
        $turma->modalidade = $request->modalidade;
        $turma->ano = $request->ano;
        $turma->id_curso = $request->curso;

        $turma->save();
        return redirect(url('/coordenador/gerenciar-turmas'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Turma  $turma
     * @return \Illuminate\Http\Response
     */
    public function alternate(Turma $turma)
    {
        if($turma->status == 0){
            $turma->status = 1;
        }elseif($turma->status == 1) {
            $turma->status == 0;
        }
        $turma->save();
        return redirect(url('/coordenador/gerenciar-turmas'));
    }
}
