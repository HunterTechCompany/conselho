<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;

class VisualizarAlunoController extends Controller
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
        return view ( "Conselho/Coordenador/VisualizarAlunos/VisualizarAlunos", compact( "dados"));
    }

    public function index2()
    {

        return view ( "Conselho/Coordenador/AdicionarAluno/AdicionarAluno");
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
        return redirect("/visualizaralunos");
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
    public function edit($matricula)
    {
        
        $dados = Aluno::where( "matricula","=",$matricula)->get();
        if ( isset ( $dados ))
            return view ('Conselho/Coordenador/EditarAluno/EditarAluno',compact("dados"));
    }

    public function update(Request $request, $matricula)
    {
        $dados = Aluno::where("matricula","=",$matricula)->get();
        if( isset ($dados) ){
            $matricula = $request["matricula"];
            $nome = $request["nome"];
            $email = $request["email"];
            $telefone = $request["telefone"];
            $pai = $request["pai"];
            $mae = $request["mae"];
            $status = 0;
            $id_turma = $request["turma"];
            Aluno::where("matricula","=",$matricula)->update([
            'matricula'=>$matricula,
            'nome'=>$nome,
            'email'=>$email,
            'telefone'=>$telefone,
            'pai'=>$pai,
            'mae'=>$mae,
            'status'=>$status,
            'id_turma'=>$id_turma
        ]
            );
        }      
        return redirect('/visualizaralunos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function destroy($matricula)
    {
        $dados = Aluno::select("matricula")->where( "matricula","=",$matricula)->get();
        if( isset($dados)){
            Aluno::where("matricula","=",$matricula)->delete();
             }else{
             return response("aluno não encontrado", 404) ;
            }
             return redirect("/visualizaralunos");
    }
}
