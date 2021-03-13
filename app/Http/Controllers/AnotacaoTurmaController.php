<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anotacao_turma;

class AnotacaoTurmaController extends Controller
{

    private $anotacao;
    private $total = 5;

    public function __construct(Anotacao_turma $anotacao){
        $this->anotacao = $anotacao;
    }

    public function index()
    {
        $anotacao = Anotacao_turma::all();
        $dados = $this->anotacao->paginate($this->total);
        return view ( "Conselho/Coordenador/AnotacoesTurma/AnotacoesTurma", compact( "dados"));
    }
    
    public function store(Request $request)
    {
        $dados = new Anotacao_turma() ;
        $dados -> anotacao = $request -> input ("anotacao");
        $dados -> id_turma = 2;
        $dados -> save();
        return redirect("/anotacoesturma");
    }

    public function destroy($id)
    {
        $dados = Anotacao_turma::find($id);
        if( isset($dados)){
          $dados->delete () ;
             }else{
             return response("anotação não encontrada", 404) ;
            }
             return redirect("/anotacoesturma");
    }

    public function edit($id)
    {
        $dados = Anotacao_turma::find( $id );
        $anotacao= Anotacao_turma::all();
        if ( isset ( $dados ))
            return view ('Conselho/Coordenador/AnotacoesTurma/EditarAnotacao',compact("dados"));
    }

    public function update(Request $request, $id)
    {
        $dados = Anotacao_turma::find($id);
        if( isset ($dados) ){
            $dados -> anotacao = $request -> input ("anotacao");
            $dados -> id_turma = 2;
            $dados -> save();
        }      
        return redirect('/anotacoesturma');
    }
}
