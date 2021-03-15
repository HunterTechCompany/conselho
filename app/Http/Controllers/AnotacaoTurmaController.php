<?php

namespace App\Http\Controllers;

use App\Models\AnotacaoTurma;
use App\Models\Turma;
use Illuminate\Http\Request;

class AnotacaoTurmaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Turma $turma)
    {
        $anotacoes = AnotacaoTurma::where('id_turma', $turma->id)->get();

        $dados = array();

        foreach($anotacoes as $item) {
            array_push($dados, ["id" => $item->id, "anotacao" => $item->anotacao]);
        }

        dd($dados);

        return view('/tarara', compact('dados'));
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
    public function store(Request $request, Turma $turma)
    {
        $dados = [
            "anotacao" => request('anotacao'),
            "id_turma" => $turma->id
        ];

        AnotacaoTurma::create($dados);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AnotacaoTurma  $anotacaoTurma
     * @return \Illuminate\Http\Response
     */
    public function show(AnotacaoTurma $anotacaoTurma)
    {
        $dados = AnotacaoTurma::where('id', $anotacaoTurma->id)->first();
        dd($dados);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AnotacaoTurma  $anotacaoTurma
     * @return \Illuminate\Http\Response
     */
    public function edit(AnotacaoTurma $anotacaoTurma)
    {
        $anotacao_turma = AnotacaoTurma::where('id', $anotacaoTurma->id)->first();
        return view('teste.anotacaoEdit', compact('anotacao_turma'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AnotacaoTurma  $anotacaoTurma
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AnotacaoTurma $anotacaoTurma)
    {
        $anotacao_turma = AnotacaoTurma::where('id', $anotacaoTurma->id)->first();
        $anotacao_turma->anotacao = $request->anotacao;
        $anotacao_turma->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AnotacaoTurma  $anotacaoTurma
     * @return \Illuminate\Http\Response
     */
    public function destroy(AnotacaoTurma $anotacaoTurma)
    {
        //
    }
}
