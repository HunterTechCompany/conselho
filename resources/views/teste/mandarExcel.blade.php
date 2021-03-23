<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/Excel/enviar" method="post" enctype="multipart/form-data">
        @csrf
        <label for="arquivo">
            Arquivo Excel:
            <input type="file" name="arquivo">
        </label>
        <input type="submit" value="Salvar">
    </form>
</body>
</html>
