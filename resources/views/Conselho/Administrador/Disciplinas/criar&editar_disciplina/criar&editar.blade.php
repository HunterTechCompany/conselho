@extends('Conselho/Administrador/layout/layout')

@section('main-page')
    <div style="height: 100%" class=" d-flex flex-column">
        <div style="height: 20%">
            <div>
                <h1 class="titulo-pagina">Adicionar Disciplina</h1>
            </div>
        </div>
        <div style="height: 20%">
            <div>
                <a class="botao-voltar font-size-756" href=""><i class="fas fa-chevron-left"></i>Voltar</a>
            </div>
        </div>
        <div class=" font-size-756 position-relative" style="height: 40%">
            <div style="width: 100%; top: 50%; transform: translate(0, -50%)" class="position-absolute">
                <div class="grid-disciplinas-add">
                    <p class=" d-block font-weight-bold">Nome da disciplina:</p>
                    <input style="height: 42px" type="text">
                </div>
                <div class="grid-disciplinas-add">
                    <p class=" d-block font-weight-bold">Categoria da disciplina:</p>
                    <select style="height: 42px">
                        <option value="tec">Técnicas</option>
                        <option value="hum">Humanas</option>
                        <option value="exa">Exatas</option>
                    </select>
                </div>

            </div>
        </div>
        <div style="height: 20%">
            <div>
                <a class=" font-size-756 botao-salvar" href="">Salvar</a>
            </div>
        </div>
    </div>
@endsection
