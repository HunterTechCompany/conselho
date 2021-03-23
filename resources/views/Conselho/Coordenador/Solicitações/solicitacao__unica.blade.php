@extends('conselho.Coordenador.layouts.base')

@section('main')
    <section class="main__secao">
        <header>
            <h2 class="main__secao__titulo">
                detalhes da solicitação
            </h2>
        </header>
        <div class="div__solicitacao__itens margin-top-60">
            <p><strong>Aluno: </strong>José Augusto Florenzo</p>
            <p><strong>Telefone: </strong>José Augusto Florenzo</p>
            <p><strong>Responsável: </strong>José Augusto Florenzo</p>
            <p><strong>Telefone Responsável: </strong>José Augusto Florenzo</p>
            <p><strong>Endereço: </strong>José Augusto Florenzo</p>
        </div>
        <h2 class="sub-title">Atividades</h2>
        <div class="div__solicitacao__itens">
            <p><strong>Disciplina: </strong>José Augusto Florenzo</p>
            <p><strong>Professor(a): </strong>José Augusto Florenzo</p>
        </div>
        <div class="solicitacao__infos">
            <p><strong>Tipo: </strong>José Augusto Florenzo</p>
            <p><strong>Descrição: </strong>José Augusto Florenzo</p>
            <div>
                <p  class="bold">Comprovante: </p>
                <button class="bt-tabela bt-visualizar">
                    <img class="bt-icon" src="/icons/visualizar.png" alt="VER">
                </button>
            </div>
        </div>
        <form action="" method="GET">
            @csrf
            <label class="bold" for="situacao">Situação: 
                <select name="situacao" id="situacao">
                    <option value="Aberto">Aberto</option>
                    <option value="Aceito">Aceito</option>
                    <option value="Negado">Negado</option>
                </select>
            </label>
            <button class="bt-enviar" type="submit">Enviar</button>
        </form>
    </section>
@endsection