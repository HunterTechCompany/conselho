@extends('Conselho.Administrador.layout.layout') @section('content')
<div class="conteiner-fluid" style="margin: 10px">
    <div class="row justify-content-center">
        <h1 style="">
            Adicionar Curso
        </h1>
    </div>
    <div>
        <a class="btn btn-primary btn-md" style="margin: 5px" href="{{url('/curso')}}"><img src="/conselho/_imagens/voltar.svg" alt="">Voltar</a>
    </div>
    <form>
        <div class="form-group row">
            <label style="" for="nome" class="col-2 col-form-label"
                ><strong>Nome do Curso</strong></label
            >
            <div class="col-6">
                <input
                    id="nome"
                    name="nome"
                    placeholder="Informatica"
                    type="text"
                    class="form-control"
                    required="required"
                />
            </div>
        </div>
        <div class="form-group row">
            <label style="" for="modalidade" class="col-2 col-form-label"
                ><strong>Ano do Curso:</strong></label
            >
            <div class="col-6">
                <input
                    id="modalidade"
                    name="modalidade"
                    placeholder="2020-2021-2022"
                    type="text"
                    class="form-control"
                />
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
