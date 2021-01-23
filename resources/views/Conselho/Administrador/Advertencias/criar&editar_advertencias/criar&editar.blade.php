@extends('Conselho/Administrador/layout/layout')

@section('main-page')
    <div style="height: 100%" class=" d-flex flex-column">
        <div style="height: 20%">
            <div>
                <h1 class="titulo-pagina">Adicionar Tipo de Advertência</h1>
            </div>
        </div>
        <div style="height: 20%">
            <div>
                <a class="botao-voltar font-size-756" href=""><i class="fas fa-chevron-left"></i>Voltar</a>
            </div>
        </div>
        <div class=" font-size-756 position-relative" style="height: 40%">
            <div style="width: 100%; top: 50%; transform: translate(0, -50%)" class="position-absolute">
                <p class=" d-block font-weight-bold">Tipo de advertência:
                    <input style="width: 70%; height: 42px" type="text">
                </p>

            </div>
        </div>
        <div style="height: 20%">
            <div>
                <a class=" font-size-756 botao-salvar" href="">Salvar</a>
            </div>
        </div>
    </div>
@endsection
