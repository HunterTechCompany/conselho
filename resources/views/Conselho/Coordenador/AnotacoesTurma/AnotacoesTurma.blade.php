@extends('Conselho.Coordenador.layout.layout')

@section('content')
<div class="conteiner-fluid">
    <div class="row justify-content-center">
        <h1 style="font-weight: bold; font-family: 'Tomorrow', sans-serif;">Anotações da Turma</h1>
    </div>
    <div>
        <a class="btn btn-primary btn-md" style="margin: 5px" href="{{url('/visualizaralunos')}}"
            ><img src="/conselho/_imagens/voltar.svg" alt="" />Voltar</a>
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
                <th>Anotações</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dados as $item)
            <tr>
                <td>{{$item->anotacao}}</td>
                <td><a href="/editaranotacao/{{$item->id}}"><img class="imagem-tabela" src="/conselho/_imagens/Editar.svg" alt=""></a></td>
                <td><button type="button" class="btn btn-sm" data-toggle="modal" data-target="#exampleModal">
                  <img class="imagem-tabela" src="/conselho/_imagens/Excluir.svg" alt=""></button></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    <div class="justify-content-center row">
        {{ $dados->links() }}
    </div>
    <div style="margin: 5px">
        <a class="btn btn-secondary btn-md"href="{{url('/adicionaranotacao')}}">Adicionar</a>
    </div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        Deseja realmente Excluir essa Anotação?
      </div>
      <div class="modal-footer justify-content-between">
        <a class="btn btn-primary btn-sm" href="/excluir/{{$item->id}}">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSim&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>
        <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNao&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
      </div>
    </div>
  </div>
</div>
@endsection