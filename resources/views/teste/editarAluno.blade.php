<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TESTE</title>
</head>
<body>
    <form action="/editar" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="_method" value="PATCH">
        <input type="hidden" name="matri" value="{{$dados->matricula}}">
        <label for="matricula">
            Matricula:
            <input type="text" name="matricula" value="{{$dados->matricula}}">
        </label><br>
        <label for="nome">
            Nome:
            <input type="text" name="nome" value="{{$dados->nome}}">
        </label><br>
        <label for="foto">
            Foto:
            <input type="file" name="foto" id="foto">
        </label><br>
        <div >
            <img style="width: 180px; height:120px" src="{{$dados->foto->url}}" alt="Fail">
        </div>
        <label for="email">
            Email:
            <input type="text" name="email" value="{{$dados->email}}">
        </label><br>
        <label for="pai">
            Pai:
            <input type="text" name="pai" value="{{$dados->pai}}">
        </label><br>
        <label for="mae">
            Mae:
            <input type="text" name="mae" value="{{$dados->mae}}">
        </label><br>
        <label for="mae">
            Telefone:
            <input type="text" name="telefone" value="{{$dados->telefone}}">
        </label><br>
        <label for="turma">
            Turma:
            <input type="number" name="turma" value="{{$dados->turma}}">
        </label><br>
        <input type="hidden" name="status" value="{{$dados->status}}">
        <input type="submit" value="Salvar">
    </form>
</body>
</html>
