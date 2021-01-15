@extends('Conselho.Administrador.layout.layout')

@section('content')
<div class="conteiner">
    <h1 style="text-align: center; font-size: 1rem; font-weight: bold; font-family: 'Tomorrow', sans-serif;">Adicionar Curso</h1>
    <a class="btn btn-primary btn-sm" href="">Voltar</a>
    <form action="">
        <div class="row">
            <label for="nome"><strong>Nome do Curso:</strong></label>
            <input type="text" name="nome" placeholder="Informática">
        </div>
        <div class="row">
            <label for="ano"><strong>Ano do Curso</strong></label>
            <input type="text" name="ano" placeholder="2020-2021-2022">
        </div>
        <button type="submit" class="btn btn-success btn-sm">Salvar</button>
    </form>
</div>
@endsection