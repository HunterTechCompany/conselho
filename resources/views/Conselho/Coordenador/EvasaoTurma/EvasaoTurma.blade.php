@extends('Conselho.Coordenador.layout.layout')

@section('content')
<div class="conteiner-fluid">
    <div>
        <a class="btn btn-primary btn-md" style="margin: 5px" href="{{url('/visualizaralunos')}}"><img src="/conselho/_imagens/voltar.svg" alt="" />Voltar</a>
    </div>
    <div class="row justify-content-center">
        <h1 style="font-weight: bold; font-family: 'Tomorrow', sans-serif;">Evasão/Retenção de Turmas</h1>
    </div>
    <div>
        <img src="/conselho/_imagens/Grafico-evasao.svg" style="width: 1100px" alt=""/>
    </div>
    <div class="justify-content-center row">
        <img src="/conselho/_imagens/Legenda.svg" style="width: 350px" alt=""/>
    </div>
</div>

@endsection