<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Models\Aluno;
use App\Models\Boletim;
use App\Models\Atendimento;
use App\Models\Bimestre;
use App\Models\Turma;
use App\Models\User;
use App\Models\Foto;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {

    }

    public function index()
    {

        $alunos = Aluno::where('id_turma', 2)->orderBy('nome')->get();

        $dados = array();

        foreach($alunos as $var) {
            $medias_perdidas = 0;
            $faltas = 0;
            $bimestre = Bimestre::where('bimestre', 1)->first();

            $atendimentos = Atendimento::where('matricula', $var->matricula)->count();
            $boletim = Boletim::where('matricula', $var->matricula)->where('id_bimestre', 1)->get();

            foreach($boletim as $bol) {
                if((int)$bol->nota < (int)$bimestre->media_bimestre) {
                    $medias_perdidas ++;
                }
                $faltas += (int)$bol->faltas;
            }

            $porcentagem_faltas = round(($faltas * 100) / 120);

            array_push($dados, ["matricula" => $var->matricula,
                                "nome" => $var->nome,
                                "faltas" => $porcentagem_faltas,
                                "medias_perdidas" => $medias_perdidas,
                                "atendimentos" => $atendimentos,
                                "status" => $var->status]);
        }

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
        $dados_aluno = [
            'matricula' => request('matricula'),
            'nome' => request('nome'),
            'email' => request('email'),
            'telefone' => request('telefone'),
            'pai' => request('pai'),
            'mae' => request('mae'),
            'telefone' => request('telefone'),
            'id_turma' => request('turma'),
            'status' => request('status')
        ];

        Aluno::create($dados_aluno);

        $nome_temporario_arquivo = $_FILES['foto']['tmp_name'];
        $nome_arquivo = $_FILES['foto']['name'];
        $extensao_arquivo = pathinfo($nome_arquivo, PATHINFO_EXTENSION);
        $extensao_arquivo = strtolower($extensao_arquivo);

        if(strstr('.jpg;.jpeg;.gif;.png', $extensao_arquivo)) {
            $nome_final_arquivo = uniqid(time()) . '.' . $extensao_arquivo;
            $destino_arquivo = 'imagens/' . $nome_final_arquivo;
            @move_uploaded_file($nome_temporario_arquivo, $destino_arquivo);
        } else {
            $erro = 'Apenas arquivos jpg, jpeg, gif ou png';
            //ainda inutilizado
        }
        if($destino_arquivo) {
            $dados_arquivo_foto = [
                'matricula' => request('matricula'),
                'url' => $destino_arquivo
            ];
            Foto::create($dados_arquivo_foto);
        } else {
            //foto não adicionada
        }

        echo "Rodou!";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function show(Aluno $aluno)
    {

        //$foto = $aluno->foto->url;
        $qtd_bimestres = 4;

        $array_final = array();
        static $array_categorias = array();

        $categorias = DB::select('SELECT DISTINCT categoria_disciplina.categoria FROM categoria_disciplina INNER JOIN disciplinas ON disciplinas.id_categoria = categoria_disciplina.id INNER JOIN boletins ON boletins.matricula = ' . $aluno->matricula . ' ORDER BY categoria_disciplina.categoria');

        foreach($categorias as $cat) {
            array_push($array_categorias, ['categoria' => $cat->categoria, 'desempenho' => (int)0]);
        }

        $disciplinas = DB::select('SELECT DISTINCT disciplinas.id, disciplinas.disciplina, categoria_disciplina.categoria FROM disciplinas INNER JOIN categoria_disciplina ON categoria_disciplina.id = disciplinas.id_categoria INNER JOIN boletins ON boletins.id_disciplina = disciplinas.id AND boletins.matricula = ' . $aluno->matricula . ' ORDER BY disciplinas.disciplina');

        foreach($disciplinas as $dis) {

            $aux = DB::select('SELECT boletins.nota, bimestres.bimestre FROM boletins INNER JOIN bimestres ON bimestres.id = boletins.id_bimestre WHERE boletins.matricula = ' . $aluno->matricula . ' AND boletins.id_disciplina = ' . $dis->id . ' ORDER BY bimestres.bimestre');

            $notas_temp_array = array();

            for($i = 0; $i < $qtd_bimestres; $i++) {

                $desempenho_categoria = 0;

                if(array_key_exists($i - 1, $aux) || !array_key_exists($i, $aux)) {
                    if(array_key_exists($i, $aux)) {
                        $desempenho_categoria += $aux[$i]->nota;
                        array_push($notas_temp_array, $aux[$i - 1]->nota + $aux[$i]->nota);
                    }else {
                        array_push($notas_temp_array, '-');
                    }

                }else {
                    $desempenho_categoria += $aux[$i]->nota;
                    array_push($notas_temp_array, $aux[$i]->nota);
                }

                foreach($array_categorias as &$arca) {
                    if($arca['categoria'] == $dis->categoria) {
                        $arca['desempenho'] = $arca['desempenho'] + $desempenho_categoria;
                    }
                }
                unset($arca);
            }

            $aux_dados = ['disciplina' => $dis->disciplina,
                        'categoria' => $dis->categoria,
                        'B1' => $notas_temp_array[0],
                        'B2' => $notas_temp_array[1],
                        'B3' => $notas_temp_array[2],
                        'B4' => $notas_temp_array[3],
            ];

            array_push($array_final, $aux_dados);
            $desempenho_aluno = $array_categorias;
            $aluno_dados = [$aluno->nome];
        }
        dd($desempenho_aluno, $array_final);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function edit(Aluno $aluno)
    {
        $dados = [
            'matricula' => $aluno->matricula,
            'nome' => $aluno->nome,
            'foto' => Foto::where('matricula', $aluno->matricula)->first(),
            'email' => $aluno->email,
            'pai' => $aluno->pai,
            'mae' => $aluno->mae,
            'telefone' => $aluno->telefone,
            'turma' => $aluno->id_turma,
            'status' => $aluno->status
        ];

        $dados = (object)$dados;

        return view('teste.editarAluno', compact('dados'));
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
        $aluno = Aluno::where('matricula', $request->matri)->first();

        $aluno->matricula = $request->matricula;
        $aluno->nome = $request->nome;
        $aluno->email = $request->email;
        $aluno->pai = $request->pai;
        $aluno->mae = $request->mae;
        $aluno->telefone = $request->telefone;
        $aluno->id_turma = $request->turma;
        $aluno->status = $request->status;

        $aluno->save();
        $foto = Foto::where('matricula', $aluno->matricula)->first();

        if(isset($_FILES['foto']['name'])) {
            $teste = unlink(ltrim($foto->url, '/'));
            if($teste) {
                $nome_temporario_arquivo = $_FILES['foto']['tmp_name'];
                $nome_arquivo = $_FILES['foto']['name'];
                $extensao_arquivo = pathinfo($nome_arquivo, PATHINFO_EXTENSION);
                $extensao_arquivo = strtolower($extensao_arquivo);

                if(strstr('.jpeg; .jpg; .gif; .png', $extensao_arquivo)) {
                    $nome_final_arquivo = uniqid(time()) . '.' . $extensao_arquivo;
                    $destino_arquivo = 'imagens/' . $nome_final_arquivo;
                    @move_uploaded_file($nome_temporario_arquivo, $destino_arquivo);

                    $foto->url = '/' . $destino_arquivo;
                    $foto->save();

                } else {
                    $erro = 'apenas arquivo .jpeg, .jpg, .gif ou .png';
                    //ainda sem uso
                }
            } else {
                $erro = 'Erro ao excluir imagem anterior';
            }
        }
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

    public function teste(){
        $aluno = Aluno::where('matricula', 00002)->first();
        $teste = $aluno->boletim[0]->id_disciplina;
        $a = '00001';
        $alo = null;
        if($alo) {
            dd($alo);
        }
        else {
            echo 'ih';
        }
    }
}
