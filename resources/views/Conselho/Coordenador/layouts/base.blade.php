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
                {{ Auth::user()->name }}
            </p>
            <nav class="secaoMenu__nav">
                <ul class="secaoMenu__nav__ul">
                    <li class="ul__list">
                        <a id='turma-selecionada' onclick="abreModal('div-back-modal')" class="ul__list__a click">
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
                        <a class="ul__list__a" href="{{ url('/coordenador/gerenciar-turmas') }}">
                            gerenciar turmas
                        </a>
                    </li>
                    <li class="ul__list">
                        <a class="ul__list__a" href="{{ url('/coordenador/bimestres') }}">
                            bimestres
                        </a>
                    </li>
                    <li class="ul__list">
                        <a class="ul__list__a" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            sair
                        </a>
                    </li>
                </ul>
            </nav>
        </section>
        <main class="secaoPrincipal__main">
            @yield('main')
        </main>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </section>

    <div id="div-back-modal" class="back-modal">
        <div class="modal-turmas">
            <h3>Selecione uma turma</h3>
            <div class="div-modal-buttom">
                @if ($turmas ?? '' != null)
                    @foreach ($turmas ?? '' as $var)
                        <button onclick="selecionaTurma(this, 'div-back-modal')" class="modal-buttom" value="{{ $var->id }}">{{ $var->turma }}</button>
                    @endforeach
                @else
                    <span class="no-access">SEM ACESSO À TURMAS</span>
                @endif
            </div>
            
        </div>
    </div>
    <script src="{{ url('/site/scripts.js') }}"></script>
</body>
</html>