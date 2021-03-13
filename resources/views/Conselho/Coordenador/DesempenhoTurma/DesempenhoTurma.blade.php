@extends('Conselho.Coordenador.layout.layout')

@section('content')
<div class="conteiner-fluid">
    <div>
        <a class="btn btn-primary btn-md" style="margin: 5px" href="{{url('/visualizaralunos')}}"><img src="/conselho/_imagens/voltar.svg" alt="" />Voltar</a>
    </div>
    <div class="row justify-content-center">
        <h1 style="font-weight: bold; font-family: 'Tomorrow', sans-serif;">Desempenho De Turmas</h1>
    </div>
    <div>
        <p>Quantidade de Médias perdidas</p>
        <img src="/conselho/_imagens/Grafico-turma.svg" style="width: 1100px" alt=""/>
    </div>
    <div class="justify-content-center row">
        <a class="btn btn-md" href="" style="background-color:#0B12BD; color: white; margin:20px">1 Informática</a>
        <a class="btn btn-md" href="" style="background-color:#0B12BD; color: white;margin:20px">2 Informática</a>
        <a class="btn btn-md" href="" style="background-color:#0B12BD; color: white;margin:20px">3 Informática</a>
    </div>
</div>

@endsection