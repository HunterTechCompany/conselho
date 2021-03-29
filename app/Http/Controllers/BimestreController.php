<?php

namespace App\Http\Controllers;

use App\Models\Bimestre;
use App\Models\Turma;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BimestreController extends Controller
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
        $dados = Bimestre::all();
        return view('Conselho.Coordenador.Bimestres.bimestres__listar', compact('dados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $turma = request('turma');
        return view('Conselho.Coordenador.Bimestres.bimestres__adicionar', compact('turma'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dados = [
            'bimestre' => request('bimestre'),
            'media_bimestre' => request('media_bimestral'),
            'media_total' =>request('media_acumulada'),
            'id_turma' => request('turma')
        ];
        Bimestre::create($dados);
        return redirect(url('/coordenador/bimestres'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bimestre  $bimestre
     * @return \Illuminate\Http\Response
     */
    public function show(Bimestre $bimestre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bimestre  $bimestre
     * @return \Illuminate\Http\Response
     */
    public function edit(Bimestre $bimestre)
    {
        $turma = Turma::where('id', $bimestre->id_turma)->first();

        $dados = [
            'chave' => $bimestre->id,
            'bimestre' => $bimestre->bimestre,
            'media_bimestre' => $bimestre->media_bimestre,
            'media_total' =>$bimestre->media_total,
            'turma' => $turma->turma
        ];

        settype($dados, 'object');

        return view('Conselho.Coordenador.Bimestres.bimestres__editar', compact('dados'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bimestre  $bimestre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bimestre $bimestre)
    {
        $bimestre = Bimestre::where('id', $request->chave)->first();
        $bimestre->bimestre = $request->bimestre;
        $bimestre->media_bimestre = $request->media_bimestre;
        $bimestre->media_total = $request->media_total;
        $bimestre->save();
        return redirect(url('/coordenador/bimestres'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bimestre  $bimestre
     * @return \Illuminate\Http\Response
     */
    public function delete(Bimestre $bimestre)
    {
        $bimestre = Bimestre::where('id', request('chave'))->first();
        $bimestre->delete();
        return redirect(url('/coordenador/bimestres'));
    }
}
