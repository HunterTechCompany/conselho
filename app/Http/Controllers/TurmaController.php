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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dados = DB::select('SELECT turmas.id,turmas.turma, turmas.modalidade, turmas.ano, turmas.status FROM turmas INNER JOIN users_turmas ON users_turmas.id_turma = turmas.id AND users_turmas.id_usuario = 2 ORDER BY turmas.turma');
        dd($dados);
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
        $dados = array();
        dd($turma);
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
        return view('teste.editarTurma', compact('dados'));
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

        $turma->turma = $request->turma;
        $turma->modalidade = $request->modalidade;
        $turma->ano = $request->ano;
        $turma->id_curso = $request->curso;

        $turma->save();
        dd($turma);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Turma  $turma
     * @return \Illuminate\Http\Response
     */
    public function destroy(Turma $turma)
    {
        //
    }
}
