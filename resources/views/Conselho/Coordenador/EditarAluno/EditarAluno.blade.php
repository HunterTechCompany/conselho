@extends('Conselho.Coordenador.layout.layout') 

@section('content')
<div class="conteiner-fluid" style="margin: 10px">

    <div class="form-group row">
        <img src="/conselho/_imagens/anonimo.svg" alt="" style="width:200px; margin: 10px">
        <div class="col-md-5 offset-md-1">
            <h1 style="text-align: center">Editar Aluno</h1>
        </div>
    </div>
    <div>
        <a class="btn btn-primary btn-md" style="margin: 5px" href="{{url('/visualizaralunos')}}"
            ><img src="/conselho/_imagens/voltar.svg" alt="" />Voltar</a>
    </div>
    <form action="/alunoeditado/{{$dados}}" method="POST">
        @csrf
        <div class="form-group row">
            <label for="matricula" class="col-2 col-form-label"
                ><strong>Matrícula:</strong></label
            >
            <div class="col-6">
                <input
                    id="matricula"
                    name="matricula"
                    type="text"
                    class="form-control"
                    required="required"
                />
            </div>
        </div>
        <div class="form-group row">
            <label for="nome" class="col-2 col-form-label"
                ><strong>Nome:</strong></label
            >
            <div class="col-6">
                <input
                    id="nome"
                    name="nome"
                    type="text"
                    class="form-control"
                />
            </div>
        </div>
        <div class="form-group row">
            <label for="foto" class="col-2 col-form-label"
                ><strong>Foto:</strong></label
            >
            <div class="col-6">
                <input
                    id="foto"
                    name="foto"
                    type="file"
                    class="form-control"
                />
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-2 col-form-label"
                ><strong>E-mail:</strong></label
            >
            <div class="col-6">
                <input
                    id="email"
                    name="email"
                    type="text"
                    class="form-control"
                />
            </div>
        </div>
        <div class="form-group row">
            <label for="telefone" class="col-2 col-form-label"
                ><strong>Telefone:</strong></label
            >
            <div class="col-6">
                <input
                    id="telefone"
                    name="telefone"
                    type="text"
                    class="form-control"
                />
            </div>
        </div>
        <div class="form-group row">
            <label for="pai" class="col-2 col-form-label"
                ><strong>Pai:</strong></label
            >
            <div class="col-6">
                <input
                    id="pai"
                    name="pai"
                    type="text"
                    class="form-control"
                />
            </div>
        </div>
        <div class="form-group row">
            <label for="mae" class="col-2 col-form-label"
                ><strong>Mãe:</strong></label
            >
            <div class="col-6">
                <input
                    id="mae"
                    name="mae"
                    type="text"
                    class="form-control"
                />
            </div>
        </div>
        <div class="form-group row">
            <label for="turma" class="col-2 col-form-label"
                ><strong>Turma:</strong></label
            >
            <div class="col-6">
                <input
                    id="turma"
                    name="turma"
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
