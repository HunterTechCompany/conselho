@extends('Conselho.Administrador.layout.layout')

@section('content')
<div class="conteiner">
    <a class="btn btn-primary btn-sm" href="">Voltar</a>
    <h1 style="text-align: center; font-size: 1rem; font-weight: bold; font-family: 'Tomorrow', sans-serif;">Adicionar Usuário</h1>
    <form action="">
        <div class="row">
            <label for="nome"><strong>Nome Completo:</strong></label>
            <input type="text" name="nome">
        </div>
        <div class="row">
            <label for="email"><strong>E-mail:</strong></label>
            <input type="text" name="email" >
        </div>
        <div class="row">
            <label for="senha"><strong>Senha:</strong></label>
            <input type="text" name="senha">
        </div>
        <div class="row">
            <label for="turma"><strong>Ano:</strong></label>
            <select name="curso" id="curso">
                <option value="2021"> </option>
            </select>
        </div>
        <div class="">
            <label for="turma"><strong>Curso que Administra:</strong></label>
        </div>
        <div class="row">
            <div class="col">
                <div class="row">
                    <input type="checkbox" name="1ºinformatica">
                    <label for="1ºinformatica">1º Informática - Int 2020</label>           
                </div>
                <div class="row">
                    <input type="checkbox" name="1ºedificacoes">
                    <label for="1ºedificacoes">1º Edificações - Int 2020</label>           
                </div>
                <div class="row">
                    <input type="checkbox" name="1ºmecatronica">
                    <label for="1ºmecatronica">1º Mecatrônica - Int 2020</label>           
                </div>
                <div class="row">
                    <input type="checkbox" name="1ºmecatronica">
                    <label for="1ºmecatronica">1º Mecatrônica - Sub 2020</label>           
                </div>
            </div>
            <div class="col">
                <div class="row">
                    <input type="checkbox" name="2ºinformatica">
                    <label for="2ºinformatica">2º Informática - Int 2020</label>           
                </div>
                <div class="row">
                    <input type="checkbox" name="2ºedificacoes">
                    <label for="2ºedificacoes">2º Edificações - Int 2020</label>           
                </div>
                <div class="row">
                    <input type="checkbox" name="2ºmecatronica">
                    <label for="2ºmecatronica">2º Mecatrônica - Int 2020</label>           
                </div>
                <div class="row">
                    <input type="checkbox" name="2ºmecatronica">
                    <label for="2ºmecatronica">2º Mecatrônica - Sub 2020</label>           
                </div>
            </div>
            <div class="col">
                <div class="row">
                    <input type="checkbox" name="3ºinformatica">
                    <label for="3ºinformatica">3º Informática - Int 2020</label>           
                </div>
                <div class="row">
                    <input type="checkbox" name="3ºedificacoes">
                    <label for="3ºedificacoes">3º Edificações - Int 2020</label>           
                </div>
                <div class="row">
                    <input type="checkbox" name="3ºmecatronica">
                    <label for="3ºmecatronica">3º Mecatrônica - Int 2020</label>           
                </div>
                <div class="row">
                    <input type="checkbox" name="engenhariacivil">
                    <label for="engenhariacivil">Engenharia Civil- Not 2020</label>           
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-success btn-sm">Salvar</button>
    </form>
</div>
@endsection