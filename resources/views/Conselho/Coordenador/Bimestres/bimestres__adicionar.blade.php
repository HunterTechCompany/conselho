@extends('Conselho.Coordenador.layouts.base')

@section('main')
<section class="main__secao">
    <header>
        <h2 class="main__secao__titulo">
            Adicionar Bimestre
        </h2>
    </header>
    <div>
        <a class="bt-voltar" href="#"><strong class="black">< </strong> Voltar</a>
    </div>
    <div class="margin-60px-top margin-30px-bottom">
        <h3 class="center-align">Turma</h3>
    </div>
    <div class="div-bimestres">
        <form action="{{ url('/coordenador/bimestres/save') }}" method="POST">
            @csrf
            <input type="hidden" name="turma" value="{{ $turma }}">
            <div class="div-flex">
                <div class="div-inline flex-100per">
                    <label class="bold width-30per d-inline-block" for="bimestre">Bimestre:</label>
                    <input class="input-turma-edit width-220px" type="text" name="bimestre" id="bimestre">
                </div>
                <div class="div-inline flex-100per">
                    <label class="bold width-30per d-inline-block" for="media_bimestral">Média Bimestral:</label>
                    <input class="input-turma-edit width-220px" type="text" name="media_bimestral" id="media_bimestral">
                </div>
                <div class="div-inline flex-100per">
                    <label class="bold width-30per d-inline-block" for="media_acumulada">Média Acumulada:</label>
                    <input class="input-turma-edit width-220px" type="number" name="media_acumulada" id="media_bimestral" minlength="2000" aria-valuemin="2000">
                </div>
            </div>
            <button class="bt-enviar" type="submit">Enviar</button>
        </form>
    </div>
</section>
@endsection