<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Criar Bimestre</title>
</head>
<body>
    <div>
        <form action="/updateBimestre" method="POST">
            @csrf
            <input type="hidden" name="_method" value="PATCH">
            <input type="hidden" name="chave" value="{{$dados->chave}}">
            <label for="bimestre"> Bimestre
                <input type="text" name="bimestre" value="{{$dados->bimestre}}">
            </label>
            <label for="media_bimestre"> Media
                <input type="text" name="media_bimestre" value="{{$dados->media_bimestre}}">
            </label>
            <label for="media_total"> Media esperada
                <input type="text" name="media_total" value="{{$dados->media_total}}">
            </label>
            <input type="submit" value="Salvar">
        </form>
    </div>
</body>
</html>
