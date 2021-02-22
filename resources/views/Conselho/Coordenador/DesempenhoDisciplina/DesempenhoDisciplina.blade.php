@extends('Conselho.Administrador.layout.layout')

@section('content')
<div class="conteiner-fluid">
    <div>
        <a class="btn btn-primary btn-md" style="margin: 5px" href="{{url('/visualizaralunos')}}"><img src="/conselho/_imagens/voltar.svg" alt="" />Voltar</a>
    </div>
    <div class="row justify-content-center">
        <h1 style="font-weight: bold; font-family: 'Tomorrow', sans-serif;">Desempenho Das Disciplinas</h1>
    </div>
    <div>
        <img src="/conselho/_imagens/Grafico-disciplina.svg" style="width: 1200px" alt=""/>
    </div>
</div>

@endsection