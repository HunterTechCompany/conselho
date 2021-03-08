<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;

class AdicionarAlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $aluno;
    private $total = 5;

    public function __construct(Aluno $aluno){
        $this->aluno = $aluno;
    }

    public function index()
    {
        $aluno = Aluno::all();
        $dados = $this->aluno->paginate($this->total);
        return view ( "Conselho/Coordenador/AdicionarAluno/AdicionarAluno", compact( "dados"));
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
        $dados = new Aluno() ;
        $dados -> matricula = $request -> input ("matricula");
        $dados -> nome = $request -> input ("nome");
        $dados -> email = $request -> input ("email");
        $dados -> telefone = $request -> input ("telefone");
        $dados -> pai = $request -> input ("pai");
        $dados -> mae = $request -> input ("mae");
        $dados -> status = 0;
        $dados -> id_turma = $request -> input ("turma");
        $dados -> save();
        return redirect("/gerenciaraluno");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function show(Aluno $aluno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function edit(Aluno $aluno)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aluno $aluno)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aluno $aluno)
    {
        //
    }
}
