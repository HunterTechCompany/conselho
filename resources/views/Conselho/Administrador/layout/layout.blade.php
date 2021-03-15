<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Conselho de Classes</title>
    <link rel="stylesheet" href="{{ asset('conselho/css/style.css') }}">

    {{-- font awesome icons --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    {{-- font awesome icons --}}

</head>
<body class="grid-principal p-0 m-0">
    <header class="gridHeader header bg-azul-conselho font-1rem">
        <div class="d-flex p-0 m-0">
            <img src="/conselho/_imagens/logo.png" alt="logo do sistema">
            <h1 class="m-0 ml-1 text-uppercase">conselho de classes</h1>
        </div>
    </header>
    <div class="gridMenu p-0 m-0 border-right-conselho font-tomorrow">
        <div class="border-bottom-conselho section-user">
            <section>
                <h1 class="m-0 p-0">Usuário</h1>
            </section>
        </div>
        <div>
            <nav class="link-pagina">
                <ul>
                    <li class="">
                        <a class="" href="">Turma
                            <i class="fas fa-plus-circle link-a"></i>
                        </a>
                    </li>
                    <li class="">
                        <a class="" href="">Importar planilha</a>
                    </li>
                    <li class="">
                        <a class="" href="">Visualizar alunos</a>
                    </li>
                    <li class="">
                        <a class="" href="">Gerenciar turmas</a>
                    </li>
                    <li class="">
                        <a class="" href="">Bimestre</a>
                    </li>
                    <li class="">
                        <a class="" href="">Sair</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="gridPrincipal">
        <main class="font-tomorrow">
            <h1 id="titulo-conselho" class="titulo-pagina">Sistema Conselho de Classes</h1>
            @yield('main-page')
        </main>
    </div>
    {{-- bootstrap e jquery --}}
    <script src="{{ asset('conselho/js/jquery.js') }}"></script>
    <script src="{{ asset('conselho/js/bootstrap.js') }}"></script>
    {{-- bootstrap e jquery --}}

    {{-- font awesome icons --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js"></script>
    {{-- font awesome icons --}}

    {{-- script global --}}
    <script src="{{ asset('conselho/js/global.js') }}"></script>
    {{-- script global --}}
</body>
</html>
