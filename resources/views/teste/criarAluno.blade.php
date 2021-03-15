<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TESTE</title>
</head>
<body>
    <form action="/criar" method="post" enctype="multipart/form-data">
        @csrf
        <label for="matricula">
            Matricula:
            <input type="text" name="matricula">
        </label><br>
        <label for="nome">
            Nome:
            <input type="text" name="nome">
        </label><br>
        <label for="foto">
            Foto:
            <input type="file" name="foto" id="foto">
        </label><br>
        <label for="email">
            Email:
            <input type="text" name="email">
        </label><br>
        <label for="pai">
            Pai:
            <input type="text" name="pai">
        </label><br>
        <label for="mae">
            Mae:
            <input type="text" name="mae">
        </label><br>
        <label for="mae">
            Telefone:
            <input type="text" name="telefone">
        </label><br>
        <label for="turma">
            Turma:
            <input type="number" name="turma">
        </label><br>
        <input type="hidden" name="status" value="1">
        <input type="submit" value="Salvar">
    </form>
</body>
</html>
