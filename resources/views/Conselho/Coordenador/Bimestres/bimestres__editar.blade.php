@extends('Conselho.Coordenador.layouts.base')

@section('main')
<section class="main__secao">
    <header>
        <h2 class="main__secao__titulo">
            Editar Bimestre
        </h2>
    </header>
    <div>
        <a class="bt-voltar" href="javascript:history.back()"><strong class="black">< </strong> Voltar</a>
    </div>
    <div class="margin-60px-top margin-30px-bottom">
        <h3 class="center-align">{{ $dados->turma }}</h3>
    </div>
    <div class="div-bimestres">
        <form action="{{ url('/coordenador/bimestres/update') }}" method="POST">
            @csrf
            <input type="hidden" name="_method" value="PATCH">
            <input type="hidden" name="chave" value="{{ $dados->chave }}">
            <div class="div-flex">
                <div class="div-inline flex-100per">
                    <label class="bold width-30per d-inline-block" for="bimestre">Bimestre:</label>
                    <input class="input-turma-edit width-220px" type="text" name="bimestre" id="bimestre" value="{{ $dados->bimestre }}">
                </div>
                <div class="div-inline flex-100per">
                    <label class="bold width-30per d-inline-block" for="media_bimestral">Média Bimestral:</label>
                    <input class="input-turma-edit width-220px" type="text" name="media_bimestre" id="media_bimestre" value="{{ $dados->media_bimestre }}">
                </div>
                <div class="div-inline flex-100per">
                    <label class="bold width-30per d-inline-block" for="media_acumulada">Média Acumulada:</label>
                    <input class="input-turma-edit width-220px" type="number" name="media_total" id="media_total" minlength="2000" aria-valuemin="2000" value="{{ $dados->media_total }}">
                </div>
            </div>
            <button class="bt-enviar" type="submit">Enviar</button>
        </form>
    </div>
</section>
@endsection