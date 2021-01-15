@extends('Conselho.Administrador.layout.layout')

@section('content')
<div class="conteiner">
    <a class="btn btn-primary btn-sm" href="">Voltar</a>
    <h1 style="text-align: center; font-size: 1rem; font-weight: bold; font-family: 'Tomorrow', sans-serif;">1º Informatica-2019</h1>
    <table>
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
@endsection