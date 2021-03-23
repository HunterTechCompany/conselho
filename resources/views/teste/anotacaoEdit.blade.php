<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar anotação</title>
</head>
<body>
    <form action="/ediAno/{{$anotacao_turma->id}}" method="post">
        @csrf
        <input type="hidden" name="_method" value="PATCH">
        <label>anotação: <input type="text" name="anotacao" value="{{$anotacao_turma->anotacao}}"></label>
        <input type="submit" value="Salvar">
    </form>
</body>
</html>
