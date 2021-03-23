<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- styles -->
        <link rel="stylesheet" href="/site/styles.css">
    <title>Conselho de Classes</title>
</head>
<body class="corpo">
    <header class="corpo__layout__superior">
        <img class="corpo__layout__superior__logo" src="/icons/chapeu.png" alt="logo-do-site">
        <h1 class="corpo__layout__superior__titulo">Conselho de Classes</h1>
    </header>
    <section class="corpo__secaoPrincipal">
        <section class="secaoPrincipal__secaoMenu">
            <p class="secaoMenu__usuario">
                Fulano
            </p>
            <nav class="secaoMenu__nav">
                <ul class="secaoMenu__nav__ul">
                    <li class="ul__list">
                        <a class="ul__list__a" href="#">
                            turmas
                            <i>+</i>
                        </a>
                    </li>
                    <li class="ul__list">
                        <a class="ul__list__a" href="#">
                            importar Planilha
                        </a>
                    </li>
                    <li class="ul__list">
                        <a class="ul__list__a" href="#">
                            visualizar alunos
                        </a>
                    </li>
                    <li class="ul__list">
                        <a class="ul__list__a" href="#">
                            gerenciar turmas
                        </a>
                    </li>
                    <li class="ul__list">
                        <a class="ul__list__a" href="#">
                            bimestres
                        </a>
                    </li>
                    <li class="ul__list">
                        <a class="ul__list__a" href="#">
                            sair
                        </a>
                    </li>
                </ul>
            </nav>
        </section>
        <main class="secaoPrincipal__main">
            @yield('main')
        </main>
    </section>
</body>
</html>