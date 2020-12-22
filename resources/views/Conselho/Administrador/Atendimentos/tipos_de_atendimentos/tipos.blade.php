@extends("Conselho.Administrador.layout.layout")

@section('main-page')
    <div class="grid-4-vertical">
        <div class=" p-1 titulo-pagina" style="background-color: aqua">
            <h1 class=" mb-2 text-center">Atendimentos</h1>
            <div class=" d-flex justify-content-between">
                <p>
                    Mostrar:
                    <select name="numero-de-registros" id="numero-de-registros">
                        <option value="10">10 registros</option>
                        <option value="15">15 registros</option>
                        <option value="20">20 registros</option>
                    </select>
                </p>
                <p>
                    Buscar:
                    <input id="buscador" type="text">
                </p>
            </div>
        </div>
        <div style="background-color: red">
            <table class=" table table-condensed table-hover table">
                <thead>
                    <tr>
                        <th colspan="4">
                            Tipos de atendimentos
                        </th>
                        <th colspan="1">
                            Editar
                        </th>
                        <th colspan="1">
                            Excluir
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="4">Psicologa</td>
                        <td colspan="1">botao edit</td>
                        <td colspan="1">botao excl</td>
                    </tr>
                    <tr>
                        <td colspan="4">Psicologa</td>
                        <td colspan="1">botao edit</td>
                        <td colspan="1">botao excl</td>
                    </tr>
                </tbody>

            </table>
        </div>
        <div style="background-color: green">
            Olá
        </div>
        <div style="background-color: yellow">
            Olá
        </div>
    </div>
@endsection
