@extends('Conselho.Coordenador.layout.layout')

@section('content')
<div class="conteiner-fluid">
  <div class="row justify-content-center">
    <h1 style="font-weight: bold; font-family: 'Tomorrow', sans-serif;">Solicitações</h1>
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
</div><br>
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>Selecionar</th>
                <th>Matrícula</th>
                <th>Nome:</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dados as $item)
            <tr>
                <td><input type="checkbox" value="1"></td>
                <td>{{$item->matricula}}</td>
                <td>{{$item->nome}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
    <div class="justify-content-center row">
        {{$dados->links()}}
    </div>
    <div>
        <span class="" style="margin: 12px" role="alert"><input type="checkbox" id="checkTodos" name="checkTodos"> Selecionar Todos</span>
    </div>
    <div>
        <form action="">
        <div class="justify-content-center row">
                <div >
                    <select name="" id="">
                        <option value="">1 Informática-2020</option>
                    </select>
                </div>
            </div><br>
            <div class="justify-content-center row">
                    <button name="submit" type="submit" class="btn btn-success">
                        Enviar
                    </button>
            </div>
        </form>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $("#checkTodos").click(function(){
            $('input:checkbox').not(this).prop('checked', this.checked);
        });
    </script>


@endsection

