<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('conselho/css/style.css') }}">
    <script src="{{ asset('conselho/js/bootstrap.js') }}"></script>
    <!-- fonte Viga -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">

    <!-- fonte Tomorrow -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Tomorrow&display=swap" rel="stylesheet">

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
                    <h1>Fulano de tal</h1>
                </section>
            </div>
            <div>
                <nav>
                    <ul>
                        <li>
                            <div>
                                <a href="" data-toggle="modal" data-target="#exampleModal">Turma</a>
                                <svg width="20px" viewBox="0 0 16 16" class="bi bi-plus-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                                </svg>
                            </div>
                        </li>
                        <li>
                            <a href="{{url('/importarplanilha')}}">Importar planilha</a>
                        </li>
                        <li>
                            <a href="">Visualizar alunos</a>
                        </li>
                        <li>
                            <a href="{{url('/gerenciarturma')}}">Gerenciar turmas</a>
                        </li>
                        <li>
                            <a href="">Bimestre</a>
                        </li>
                        <li>
                            <a href="">Sair</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div>
            <main>
                @yield('content')
            </main>
        </div>
    </div>
</body>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-body justify-content-center row">
            <div class="">
                Selecione uma Turma:
            </div>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span aria-hidden="true">&times;</span>
            </button>
        </div>

      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-primary btn-sm" style="background-color: #0B12BD">1 informática</button>
        <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal" style="background-color: #0B12BD">2 Informática</button>
        <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal" style="background-color: #0B12BD">3 Informática</button>
      </div>
    </div>
  </div>
</div>
</html>

