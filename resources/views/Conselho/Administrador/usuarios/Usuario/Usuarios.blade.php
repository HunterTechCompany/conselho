@extends('Conselho.Administrador.layout.layout')

@section('content')
<div class="conteiner">
    <h1 style="text-align: center; font-size: 1rem; font-weight: bold; font-family: 'Tomorrow', sans-serif;">Usuarios</h1>
    <div class="row">
        <div class="col-md-2">
            <label for="buscar" style="text-align:right; font-size: 1rem; font-family: 'Tomorrow', sans-serif;"><strong>Busca:</strong></label>
        </div>
        <div class="col-md-2">
        <input type="text" name="buscar">
        </div>
    </div>
    <table>
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
                <td><img src="/conselho/_imagens/Editar.svg" alt=""></td>
                <td><button type="button" class="btn btn-sm" data-toggle="modal" data-target="#exampleModal"><img src="/conselho/_imagens/Excluir.svg" alt=""></button></td>
            </tr>
        </tbody>
    </table>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        Deseja realmente Excluir esse Usuario?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Nao</button>
        <button type="button" class="btn btn-primary btn-sm ">Sim</button>
      </div>
    </div>
  </div>
</div>
@endsection