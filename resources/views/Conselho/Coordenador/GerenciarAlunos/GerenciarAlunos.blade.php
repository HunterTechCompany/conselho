@extends('Conselho.Administrador.layout.layout')

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
            <tr>
                <td><input type="checkbox"></td>
                <td>2018181100</td>
                <td>Pelé</td>
            </tr>
        </tbody>
    </table>
</div>
    <button class="btn btn-primary">Marcar Todos</button>
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
@endsection