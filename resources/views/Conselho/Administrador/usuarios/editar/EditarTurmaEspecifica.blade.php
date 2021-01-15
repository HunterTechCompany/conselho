@extends('Conselho.Administrador.layout.layout')

@section('content')
<div class="conteiner">
    <a class="btn btn-primary btn-sm" href="">Voltar</a>
    <h1 style="text-align: center; font-size: 1rem; font-weight: bold; font-family: 'Tomorrow', sans-serif;">1º Informatica-2019</h1>
    <form action="">
        <div class="row">
            <label for="turma"><strong>Nome da Turma:</strong></label>
            <input type="text" name="turma" placeholder="1º Informática">
        </div>
        <div class="row">
            <label for="modalidade"><strong>Modalidade</strong></label>
            <input type="text" name="modalidade" placeholder="Integrado">
        </div>
        <div class="row">
            <label for="turma"><strong>Ano:</strong></label>
            <select name="curso" id="curso">
                <option value="2021">2021</option>
                <option value="2022">2022</option>
                <option value="2023">2023</option>
            </select>
        </div>
        <div class="row">
            <label for="turma"><strong>Curso</strong></label>
            <select name="curso" id="curso">
                <option value="Informatica:20.21.22">Informatica:20.21.22</option>
                <option value="Informatica:21.22.23">Informatica:21.22.23</option>
                <option value="Informatica:22.23.24">Informatica:22.23.24</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success btn-sm">Enviar</button>
    </form>
</div>
@endsection