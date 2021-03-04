@extends('Conselho.Administrador.layout.layout') 

@section('content')
<div class="conteiner-fluid" style="margin: 10px">

        <div class="justify-content-center row">
            <h1 style="text-align: center">Adicionar Anotação</h1>
        </div>
    <div>
        <a class="btn btn-primary btn-md" style="margin: 5px" href="{{url('/AnotacoesTurma')}}"
            ><img src="/conselho/_imagens/voltar.svg" alt="" />Voltar</a>
    </div>
    <form action="/salvar" method="POST">
    @csrf
        <div class="form-group row">
            <label for="anotacao" class="col-2 col-form-label"
                ><strong>Anotação:</strong></label
            >
            <div class="col-6">
                <input
                    id="anotacao"
                    name="anotacao"
                    type="text"
                    class="form-control"
                    required="required"
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
