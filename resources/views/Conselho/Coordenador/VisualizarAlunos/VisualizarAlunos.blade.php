@extends('Conselho.Administrador.layout.layout')

@section('content')
<div class="conteiner-fluid">
  <div class="row justify-content-center">
    <h1 style="font-weight: bold; font-family: 'Tomorrow', sans-serif;">Visualizar Alunos</h1>
</div>
<div class="row"> 
        <div class="col-md-4 offset-md-8">
            <label for="buscar"><strong>Busca:</strong></label>
            <input type="text" name="buscar">
        </div>
    </div>
</div>
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>Matrícula</th>
                <th>Nome</th>
                <th>Médias Perdidas</th>
                <th>Faltas (%)</th>
                <th>N Atendimentos</th>
                <th>Detalhes</th> 
                <th>Editar</th>
                <th>Desativar</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>2018181100</td>
                <td>Pelé</td>
                <td>2</td>
                <td>90</td>
                <td>5</td>
                <td><a href="{{url('/gerenciarturmaespecifica')}}"><img class="imagem-tabela" src="/conselho/_imagens/Ver-Alunos.svg" alt=""></a></td>
                <td><a href="{{url('/editarturma')}}"><img class="imagem-tabela" src="/conselho/_imagens/Editar.svg" alt=""></a></td>
                <td><button type="button" class="btn btn-sm" data-toggle="modal" data-target="#exampleModal">
                  <img class="imagem-tabela" src="/conselho/_imagens/Excluir.svg" alt=""></button></td>
            </tr>
        </tbody>
    </table>
    <div style="margin:40px;">
      <a class="btn btn-md" style="margin:6px; color: black; background-color: #2D93BA" href="{{url('adicionaraluno')}}">Novo Aluno</a>
      <a class="btn btn-md" style="margin:6px; color: black; background-color: #2D93BA" href="">Gerenciar Alunos</a>
      <a class="btn btn-md" style="margin:6px; color: black; background-color: #2D93BA" href="">Desempenho Nas Disciplinas</a>
      <a class="btn btn-md" style="margin:6px; color: black; background-color: #2D93BA" href="">Desempenho Da Turma</a>
      <a class="btn btn-md" style="margin:6px; color: black; background-color: #2D93BA" href="">Evasão da Turma</a>
      <a class="btn btn-md" style="margin:6px; color: black; background-color: #2D93BA" href="{{url('anotacoesturma')}}">Anotações da Turma</a>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        Deseja realmente Desativar esse Aluno?
      </div>
      <div class="modal-footer justify-content-between">
    <button type="button" class="btn btn-primary btn-sm ">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSim&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
    <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNao&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
      </div>
    </div>
  </div>
</div>
@endsection