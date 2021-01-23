@extends('Conselho/Administrador/layout/layout')

@section('main-page')
    <div class="p-tipos-atendimentos">
        <div>
            <div>
                <h1 class="titulo-pagina">Advertências</h1>
            </div>
        </div>
        <div>
            <div class=" d-flex justify-content-between font-size-756">
                <div>
                    <p>
                        Mostrar:
                        <select class="Selecao" name="numeroDeRegistros" id="numeroDeRegistros">
                            <option value="10">10 registros</option>
                            <option value="25">25 registros</option>
                            <option value="40">40 registros</option>
                        </select>
                    </p>
                </div>
                <div>
                    <p class=" text-right">
                        Buscar:
                        <input class="Buscador" type="text">
                    </p>
                </div>
            </div>
        </div>
        <div class="tabela-tipos-atendimentos font-size-756">
            <div class="grid-tabela-tipos-atendimentos border-bottom-conselho">
                <div>
                    <p class="m-0 font-weight-bold">Tipo de Advertência</p>
                </div>
                <div class="text-center">
                    <p class="m-0 font-weight-bold">Editar</p>
                </div>
                <div class="text-center">
                    <p class="m-0 font-weight-bold">Excluir</p>
                </div>
            </div>
            <div class="grid-tabela-tipos-atendimentos border-bottom-conselho">
                <div>
                    <p class="item-tipo-atendimento font-size-542">Falta com respeito para com o professor</p>
                </div>
                <div class="text-center">
                    <a class="botao-editar" href=""><i class="fas fa-pencil-alt"></i></a>
                </div>
                <div class="text-center">
                    <a class="botao-excluir" href=""><i class="fas fa-trash-alt"></i></a>
                </div>
            </div>
        </div>
        <div class=" mb-3 font-size-542">
            Mostrando...
        </div>
        <div class=" d-flex font-size-658">
            <div>
                <a class="botao-adicionar-tipo-atendimento" href="">Adicionar</a>
            </div>
            <div class="controle-de-paginas">
                <div>
                    <a href="">Primeiro</a>
                </div>
                <div>
                    <a href="">Anterior</a>
                </div>
                <div>
                    <span>1</span>
                </div>
                <div>
                    <a href="">Próximo</a>
                </div>
                <div>
                    <a href="">Último</a>
                </div>
            </div>
        </div>
    </div>
@endsection
