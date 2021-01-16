@extends('Conselho.Administrador.layout.layout')

@section('content')
<div class="conteiner-fluid">
  <div class="row justify-content-center">
    <h1>Usuarios</h1>
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
                <th>Nome</th>
                <th>Email</th>
                <th>Editar</th>
                <th>Excluir</th> 
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Weider Pereira Rodrigues</td>
                <td>weider@cefetmg.br</td>
                <td><img class="imagem-tabela" src="/conselho/_imagens/Editar.svg" alt=""></td>
                <td><button type="button" class="btn btn-sm" data-toggle="modal" data-target="#exampleModal">
                  <img class="imagem-tabela" src="/conselho/_imagens/Excluir.svg" alt=""></button></td>
            </tr>
            <tr>
                <td>Weider Pereira Rodrigues</td>
                <td>weider@cefetmg.br</td>
                <td><img class="imagem-tabela" src="/conselho/_imagens/Editar.svg" alt=""></td>
                <td><button type="button" class="btn btn-sm" data-toggle="modal" data-target="#exampleModal">
                  <img class="imagem-tabela" src="/conselho/_imagens/Excluir.svg" alt=""></button></td>
            </tr>
            <tr>
                <td>Weider Pereira Rodrigues</td>
                <td>weider@cefetmg.br</td>
                <td><img class="imagem-tabela" src="/conselho/_imagens/Editar.svg" alt=""></td>
                <td><button type="button" class="btn btn-sm" data-toggle="modal" data-target="#exampleModal">
                  <img class="imagem-tabela" src="/conselho/_imagens/Excluir.svg" alt=""></button></td>
            </tr>
        </tbody>
    </table>
    <a class="btn btn-secondary btn-md" style="margin: 5px" href=" ">Novo Usuario</a>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        Deseja realmente Excluir esse Usuario?
      </div>
      <div class="modal-footer justify-content-between">
    <button type="button" class="btn btn-primary btn-sm ">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSim&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
    <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNao&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
      </div>
    </div>
  </div>
</div>
@endsection