@extends('conselho.Coordenador.layouts.base')

@section('main')
<section class="main__secao">
    <header>
        <h2 class="main__secao__titulo">
            Editar Turma
        </h2>
    </header>
    <div>
        <a class="bt-voltar" href="#"><strong class="black">< </strong> Voltar</a>
    </div>
    <div class="div-turma-edit">
        <form action="" method="POST">
            @csrf
            <input type="hidden" name="_method" value="PATH">
            <div class="div-flex">
                <label class="bold flex-30per" for="nome_turma">Nome da Turma:</label>
                <input class="flex-70per input-turma-edit" type="text" name="nome_turma" id="nome_turma">
                <label class="bold flex-30per" for="modalidade">Modalidade:</label>
                <input class="flex-70per input-turma-edit" type="text" name="modalidade" id="modalidade">
                <label class="bold flex-30per" for="ano_turma">Ano:</label>
                <input class="flex-70per input-turma-edit" type="number" name="ano_turma" id="ano_turma" minlength="2000">
                <label class="bold flex-30per" for="curso">Curso:</label>
                <select class="flex-70per input-turma-edit" name="curso" id="curso">
                    <option value="">Turma-1</option>
                    <option value="">Turma-2</option>
                    <option value="">Turma-3</option>
                </select>
            </div>
            <button class="bt-enviar" type="submit">Enviar</button>
        </form>
    </div>
</section>
@endsection