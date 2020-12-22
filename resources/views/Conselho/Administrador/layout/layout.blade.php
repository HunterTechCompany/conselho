<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Conselho de Classes</title>
    <link rel="stylesheet" href="{{ asset('conselho/css/style.css') }}">

    <!-- fonte Viga -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    {{-- fonte Viga --}}

    <!-- fonte Tomorrow -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Tomorrow&display=swap" rel="stylesheet">
    {{-- fonte Tomorrow --}}

    {{-- font awesome icons --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    {{-- font awesome icons --}}

</head>
<body>
    <header class="topo-pagina-conselho">
        <div>
            <img src="/conselho/_imagens/logo.png" alt="logo do sistema">
            <h1>conselho de classes</h1>
        </div>
    </header>

    <div class="grid-principal-conselho">
        <div class="menu-principal">
            <div>
                <section>
                    <h1>Usuário</h1>
                </section>
            </div>
            <div>
                <nav>
                    <ul>
                        <li>
                            <div>
                                <a class="link" href="">Turma
                                    <i class="fas fa-plus-circle"></i>
                                </a>
                            </div>
                        </li>
                        <li>
                            <a class="link" href="">Importar planilha</a>
                        </li>
                        <li>
                            <a class="link" href="">Visualizar alunos</a>
                        </li>
                        <li>
                            <a class="link" href="">Gerenciar turmas</a>
                        </li>
                        <li>
                            <a class="link" href="">Bimestre</a>
                        </li>
                        <li>
                            <a class="link" href="">Sair</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div>
            <main>

                <h1 id="titulo-conselho" style="text-align: center; font-size: 1rem; font-weight: bold; font-family: 'Tomorrow', sans-serif;">Sistema Conselho de Classes</h1>

                @yield('main-page')

            </main>
        </div>
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
