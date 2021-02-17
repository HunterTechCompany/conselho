@extends('Conselho.Administrador.layout.layout')

@section('content')
<div class="conteiner-fluid">
  <div class="row justify-content-center">
    <h1 style="font-weight: bold; font-family: 'Tomorrow', sans-serif;">Modelo do Arquivo xlsx</h1>
</div>
</div><br>
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>Matrícula</th>
                <th>Nome</th>
                <th>Disciplina</th>
                <th>Aulas Ministradas (%)</th>
                <th>Faltas</th>
                <th>Bimestre</th> 
                <th>Nota</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>2018181100</td>
                <td>Pelé</td>
                <td>Aplicações Web</td>
                <td>90</td>
                <td>5</td>
                <td>3</td>
                <td>30</td>
            </tr>
        </tbody>
    </table>
    <div class="row justify-content-center">
        <p>Arquivo não selecionado</p>
    </div>
    <form action="">
    <div class="form-group row">
            <label for="senha" class="col-2 col-form-label"
                ><strong>Arquivo:</strong></label
            >
            <div class="col-6">
                <input
                    id="senha"
                    name="senha"
                    type="file"
                    class="form-control"
                />
            </div>
        </div>
        <div class="justify-content-center row">
                <button name="submit" type="submit" style="background-color:#0B12BD" class="btn btn-success">
                    Enviar
                </button>
        </div>
    </form>
@endsection