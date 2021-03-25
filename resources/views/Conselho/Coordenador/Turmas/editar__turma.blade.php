@extends('Conselho.Coordenador.layouts.base')

@section('main')
<section class="main__secao">
    <header>
        <h2 class="main__secao__titulo">
            Editar Turma
        </h2>
    </header>
    <div>
        <a class="bt-voltar" href="javascript:history.back()"><strong class="black">< </strong> Voltar</a>
    </div>
    <div class="div-turma-edit">
        <form action="/coordenador/gerenciar-turmas/update" method="POST">
            @csrf
            <input type="hidden" name="_method" value="PATCH">
            <input type="hidden" name="chave" value="{{ $dados->chave }}">
            <div class="div-flex">
                <label class="bold flex-30per" for="turma">Nome da Turma:</label>
                <input class="flex-70per input-turma-edit" type="text" name="turma" id="turma" value="{{ $dados->turma }}">
                <label class="bold flex-30per" for="modalidade">Modalidade:</label>
                <input class="flex-70per input-turma-edit" type="text" name="modalidade" id="modalidade" value="{{ $dados->modalidade }}">
                <label class="bold flex-30per" for="ano_turma">Ano:</label>
                <input class="flex-70per input-turma-edit" type="number" name="ano" id="ano" minlength="4" min="2000" value="{{ $dados->ano }}">
                <label class="bold flex-30per" for="curso">Curso:</label>
                <select class="flex-70per input-turma-edit" name="curso" id="curso">
                    @foreach ($cursos as $variavel)
                        @if ($dados->curso == $variavel->id)
                            <option value="{{ $variavel->id }}">{{ $variavel->curso }}</option>
                        @endif
                    @endforeach
                    @foreach ($cursos as $var)
                        @if ($var->id != $dados->curso)
                            <option value="{{ $var->id }}">{{ $var->curso }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <button class="bt-enviar" type="submit">Enviar</button>
        </form>
    </div>
</section>
@endsection