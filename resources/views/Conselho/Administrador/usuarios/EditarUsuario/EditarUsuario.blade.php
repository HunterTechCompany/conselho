@extends('Conselho.Administrador.layout.layout') @section('content')
<div class="conteiner-fluid" style="margin: 10px">
    <div>
        <a class="btn btn-primary btn-md" style="margin: 5px" href=" "
            ><img src="/conselho/_imagens/voltar.svg" alt="" />Voltar</a
        >
    </div>
    <div class="row justify-content-center">
        <h1>Editar Usuario</h1>
    </div>
    <form>
        <div class="form-group row">
            <label for="nome" class="col-2 col-form-label"
                ><strong>Nome Completo:</strong></label
            >
            <div class="col-6">
                <input
                    id="nome"
                    name="nome"
                    placeholder="1º Informatica"
                    type="text"
                    class="form-control"
                    required="required"
                />
            </div>
        </div>
        <div class="form-group row">
            <label for="modalidade" class="col-2 col-form-label"
                ><strong>E-mail:</strong></label
            >
            <div class="col-6">
                <input
                    id="modalidade"
                    name="modalidade"
                    placeholder="Integrado"
                    type="text"
                    class="form-control"
                />
            </div>
        </div>
        <div class="form-group row">
            <label for="senha" class="col-2 col-form-label"
                ><strong>Senha:</strong></label
            >
            <div class="col-6">
                <input
                    id="senha"
                    name="senha"
                    type="text"
                    class="form-control"
                />
            </div>
        </div>
        <div class="form-group row">
            <label for="tipo" class="col-2 col-form-label"
                ><strong>Ano:</strong></label
            >
            <div class="col-6">
                <select
                    id="tipo"
                    name="tipo"
                    class="custom-select"
                    required="required"
                >
                    <option value="2021"></option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-6">
                <label for="curso"
                    ><strong>Curso que Administra:</strong></label
                >
            </div>
        </div>
        <div class="form-group row">
            <div class="col-4">
                <input type="checkbox" name="1ºinformatica" />
                <label for="1ºinformatica">1º Informática - Int 2020</label>
            </div>
            <div class="col-4">
                <input type="checkbox" name="1ºedificacoes" />
                <label for="1ºedificacoes">1º Edificações - Int 2020</label>
            </div>
            <div class="col-4">
                <input type="checkbox" name="1ºmecatronica" />
                <label for="1ºmecatronica">1º Mecatrônica - Int 2020</label>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-4">
                <input type="checkbox" name="1ºmecatronica" />
                <label for="1ºmecatronica">1º Mecatrônica - Sub 2020</label>
            </div>
            <div class="col-4">
                <input type="checkbox" name="2ºinformatica" />
                <label for="2ºinformatica">2º Informática - Int 2020</label>
            </div>
            <div class="col-4">
                <input type="checkbox" name="2ºedificacoes" />
                <label for="2ºedificacoes">2º Edificações - Int 2020</label>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-4">
                <input type="checkbox" name="2ºmecatronica" />
                <label for="2ºmecatronica">2º Mecatrônica - Int 2020</label>
            </div>
            <div class="col-4">
                <input type="checkbox" name="2ºmecatronica" />
                <label for="2ºmecatronica">2º Mecatrônica - Sub 2020</label>
            </div>
            <div class="col-4">
                <input type="checkbox" name="3ºinformatica" />
                <label for="3ºinformatica">3º Informática - Int 2020</label>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-4">
                <input type="checkbox" name="3ºedificacoes" />
                <label for="3ºedificacoes">3º Edificações - Int 2020</label>
            </div>
            <div class="col-4">
                <input type="checkbox" name="3ºmecatronica" />
                <label for="3ºmecatronica">3º Mecatrônica - Int 2020</label>
            </div>
            <div class="col-4">
                <input type="checkbox" name="engenhariacivil" />
                <label for="engenhariacivil">Engenharia Civil- Not 2020</label>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-6">
                <button name="submit" type="submit" class="btn btn-success">
                    Salvar
                </button>
            </div>
        </div>
    </form>
</div>
@endsection
