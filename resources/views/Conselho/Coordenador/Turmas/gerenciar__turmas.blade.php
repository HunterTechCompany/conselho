@extends('conselho.Coordenador.layouts.base')

@section('main')
    <section class="main__secao">
        <header>
            <h2 class="main__secao__titulo">
                Gerenciar Turmas
            </h2>
        </header>
        <div class="main__secao__busca">
            <div>
                <label for="qtd__itens">Mostrar:</label>
                <select name="qtd__itens" id="qtd__itens">
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="15">15</option>
                </select>
                <p class="em-linha">registros</p>
            </div>
            <div>
                <label for="busca">Buscar:</label>
                <input type="text">
            </div>
        </div>
        <div class="div__tabela">
            <table class="main__secao__tabela">
                <thead>
                    <tr>
                        <th class="tb-border width-25per">Nome da Turma</th>
                        <th class="tb-border width-20per">Modalidade</th>
                        <th class="tb-border">Ano</th>
                        <th class="tb-border cel-bt-tabela bt-col">Gerenciar</th>
                        <th class="tb-border cel-bt-tabela bt-col--esquerdo">Editar</th>
                        <th class="bt-col tb-border cel-bt-tabela">Ativar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="tb-border">ok</td>
                        <td class="tb-border">ok</td>
                        <td class="tb-border">ok</td>
                        <td class="bt-col tb-border">
                            <button class="bt-tabela bt-gerenciar"><img class="bt-icon" src="/icons/gerenciar.png" alt="GERENCIAR"></button>
                        </td>
                        <td class="bt-col tb-border">
                            <button class="bt-tabela bt-editar"><img class="bt-icon" src="/icons/editar.png" alt="EDITAR"></button>
                        </td>
                        <td class="bt-col tb-border">
                            <button class="bt-tabela bt-ativar"><img class="bt-icon" src="/icons/ativar.png" alt="ATIVAR"></button>
                        </td>
                    </tr>
                    <tr>
                        <td class="tb-border">ok</td>
                        <td class="tb-border">ok</td>
                        <td class="tb-border">ok</td>
                        <td class="bt-col tb-border">
                            <button class="bt-tabela bt-gerenciar"><img class="bt-icon" src="/icons/gerenciar.png" alt="GERENCIAR"></button>
                        </td>
                        <td class="bt-col tb-border">
                            <button class="bt-tabela bt-editar"><img class="bt-icon" src="/icons/editar.png" alt="EDITAR"></button>
                        </td>
                        <td class="bt-col tb-border">
                            <button class="bt-tabela bt-ativar"><img class="bt-icon" src="/icons/ativar.png" alt="ATIVAR"></button>
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