<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Turma</title>
</head>
<body>
    <div>
        <form action="/updateTurma" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="_method" value="PATCH">
            <input type="hidden" name="chave" value="{{ $dados->chave }}">
            <label for="turma">Nome:
                <input type="text" name="turma" value="{{ $dados->turma }}">
            </label>
            <label for="modalidade">Modalidade:
                <input type="text" name="modalidade" value="{{ $dados->modalidade }}">
            </label>
            <label for="ano">Ano:
                <input type="text" name="ano" value="{{ $dados->ano }}">
            </label>
            <label for="curso">Curso:
                <input type="text" name="curso" value="{{ $dados->curso }}">
            </label>
            <input type="submit" value="Salvar">
        </form>
    </div>
</body>
</html>
