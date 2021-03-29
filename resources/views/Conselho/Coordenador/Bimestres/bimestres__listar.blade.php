@extends('Conselho/Coordenador/layouts/base')

@section('main')
    <section class="main__secao">
        <header>
            <h2 class="main__secao__titulo">
                Bimestres
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
                        <th class="tb-border">Bimestre</th>
                        <th class="tb-border">Média Bimestral</th>
                        <th class="tb-border">Média Acumulada</th>
                        <th class="tb-border cel-bt-tabela bt-col--esquerdo">Editar</th>
                        <th class="bt-col tb-border cel-bt-tabela">Desativar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dados as $var)
                        <tr>
                            <td class="tb-border">{{ $var->bimestre }}</td>
                            <td class="tb-border">{{ $var->media_bimestre }}</td>
                            <td class="tb-border">{{ $var->media_total }}</td>
                            <td class="bt-col tb-border">
                                <a href="{{ url('/coordenador/bimestres/editar/'.$var->id) }}" class="bt-tabela bt-editar"><img class="bt-icon" src="/icons/editar.png" alt="EDITAR"></a>
                            </td>
                            <td class="bt-col tb-border">
                                <button type="submit" onclick="abreModal('div-back-modal');setKey(this)" class="bt-tabela bt-desativar" value="{{ $var->id }}"><img class="bt-icon" src="/icons/desativar.png" alt="DELETAR"></button>
                            </td>
                        </tr>
                    @endforeach
                    <div id="div-back-modal" class="back-modal">
                        <div class="modal-turmas">
                            <h3>Essa ação irá deletar este bimestre!<br>Deseja continuar?</h3>
                            <div class="div-modal-buttom flex-between">
                                <form class="dnone" action="{{ url('/coordenador/bimestres/delete') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input id="key_delete" type="hidden" name="chave">
                                    <button class="modal-buttom" type="submit">SIM</button>
                                </form>
                                <button onclick="fechaModal('div-back-modal')" class="modal-buttom">NÃO</button>
                            </div>
                        </div>
                    </div>
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
        <div>
            <form id="create-form" action="{{ url('/coordenador/bimestres/criar') }}" method="POST">
                @csrf
                <input id="turma_id" type="hidden" name="turma" value="">
            </form>
            <a class="bt-adicionar click" onclick="document.querySelector('#create-form').submit()">Adicionar</a>
        </div>
    </section>
@endsection