@extends('Conselho.Administrador.layout.layout')

@section('content')
<div class="conteiner-fluid">
    <div>
        <a class="btn btn-primary btn-md" style="margin: 5px" href="{{url('/gerenciarturma')}}"><img src="/conselho/_imagens/voltar.svg" alt="">Voltar</a>
    </div>
    <div class="row justify-content-center">
        <h1 style="font-weight: bold; font-family: 'Tomorrow', sans-serif;">1º Informática-2019</h1>
    </div>
    <div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>Ver alunos</th>
                <th>Desempenho Das Disciplinas</th>
                <th>Desempenho da Turma</th>
                <th>Evasão da Turma</th> 
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><img src="/conselho/_imagens/Ver-Alunos.svg" alt=""></td>
                <td><img src="/conselho/_imagens/Disciplinas.svg" alt=""></td>
                <td><img src="/conselho/_imagens/Turma.svg" alt=""></td>
                <td><img src="/conselho/_imagens/Evasão.svg" alt=""></td>
            </tr>
        </tbody>
    </table>
    </div>
</div>
@endsection