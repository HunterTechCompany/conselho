@extends('conselho.Coordenador.layouts.base')

@section('main')
<section class="main__secao">
    <header>
        <h2 class="main__secao__titulo">
            Turma
        </h2>
    </header>
    <div>
        <a class="bt-voltar" href="#"><strong class="black">< </strong> Voltar</a>
    </div>
    <div class="div__tabela">
        <table class="main__secao__tabela width-100per">
            <thead>
                <tr>
                    <th class="tb-border cel-bt-tabela bt-col--esquerdo width-25per center-align">Ver Alunos</th>
                    <th class="tb-border cel-bt-tabela bt-col width-25per">Desempenho das Disciplinas</th>
                    <th class="tb-border cel-bt-tabela bt-col--esquerdo width-25per">Desempenho da Turma</th>
                    <th class="tb-border cel-bt-tabela bt-col width-25per">Evasão da Turma</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="bt-col tb-border">
                        <button class="bt-tabela bt-visualizar"><img class="bt-icon" src="/icons/visualizar.png" alt="VER"></button>
                    </td>
                    <td class="bt-col tb-border">
                        <button class="bt-tabela bt-desempenho"><img class="bt-icon" src="/icons/desempenho.png" alt="DESEMPENHO DAS DISCIPLINAS"></button>
                    </td>
                    <td class="bt-col tb-border">
                        <button class="bt-tabela bt-desempenho"><img class="bt-icon" src="/icons/desempenho.png" alt="DESEMPENHO DA TURMA"></button>
                    </td>
                    <td class="bt-col tb-border">
                        <button class="bt-tabela bt-evasao"><img class="bt-icon" src="/icons/evasao.png" alt="EVASÃO DA TURMA"></button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="info-qtd">
        <p>Mostrando tanto de tantos itens</p>
    </div>
    <nav class="navegacao">
        <ul class="menu__navegacao">
            <li class="navegacao__linha border-leftrad"><a class="navegacao__abt" href="#">Primeiro</a></li>
            <li class="navegacao__linha border-top-bottom"><a class="navegacao__abt" href="#">Anterior</a></li>
            <li class="navegacao__linha navegacao__pagina"><a class="navegacao__abt" href="#">1</a></li>
            <li class="navegacao__linha border-top-bottom"><a class="navegacao__abt" href="#">Seguinte</a></li>
            <li class="navegacao__linha border-rightrad"><a class="navegacao__abt" href="#">Último</a></li>
        </ul>
    </nav>
</section>
@endsection