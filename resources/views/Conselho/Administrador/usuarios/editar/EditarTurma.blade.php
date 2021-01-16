@extends('Conselho.Administrador.layout.layout') @section('content')
<div class="conteiner-fluid" style="margin: 10px">
    <div>
        <a class="btn btn-primary btn-md" style="margin: 5px" href=" "><img src="/conselho/_imagens/voltar.svg" alt="">Voltar</a>
    </div>
    <div class="row justify-content-center">
        <h1>
            Editar Turma Especifica
        </h1>
    </div>
    <form>
        <div class="form-group row">
            <label for="nome" class="col-2 col-form-label"
                ><strong>Nome da Turma</strong></label
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
                ><strong>Modalidade:</strong></label
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
            <label for="ano" class="col-2 col-form-label"><strong>Ano:</strong></label>
            <div class="col-6">
                <select
                    id="ano"
                    name="ano"
                    class="custom-select"
                    required="required"
                >
                    <option value="2021">2021</option>
                    <option value="2020">2020</option>
                    <option value="2022">2022</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="curso" class="col-2 col-form-label"><strong>Curso:</strong></label>
            <div class="col-6">
                <select id="curso" name="curso" class="custom-select">
                    <option value="informatica: 20.21.22">Informatica: 20.21.22</option>
                    <option value="informatica: 21.22.23">Informatica: 21.22.23</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-6">
                <button name="submit" type="submit" class="btn btn-success">
                    Enviar
                </button>
            </div>
        </div>
    </form>
</div>
@endsection
