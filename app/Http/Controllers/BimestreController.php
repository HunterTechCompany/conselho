<?php

namespace App\Http\Controllers;

use App\Models\Bimestre;
use Illuminate\Http\Request;

class BimestreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dados = Bimestre::all();
        dd($dados);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //retorna página create
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
            'media_bimestre' => request('media_bimestre'),
            'media_total' =>request('media_total')
        ];
        Bimestre::create($dados);
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
        $dados = [
            'chave' => $bimestre->id,
            'bimestre' => $bimestre->bimestre,
            'media_bimestre' => $bimestre->media_bimestre,
            'media_total' =>$bimestre->media_total
        ];

        settype($dados, 'object');

        return view('teste.editarBimestre', compact('dados'));
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bimestre  $bimestre
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bimestre $bimestre)
    {
        //
    }
}
