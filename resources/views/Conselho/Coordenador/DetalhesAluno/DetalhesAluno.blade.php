@extends('Conselho.Coordenador.layout.layout') 

@section('content')
<div class="conteiner-fluid" style="margin: 10px">
    <h3>Edson Arantes</h3>
    <div class="form-group row">
        <img src="/conselho/_imagens/anonimo.svg" alt="" style="width:200px; margin: 10px">
        <div class="col-md-5 offset-md-4">
            <img src="/conselho/_imagens/Grafico.svg" alt="" style="width:400px;">
        </div>
    </div>
    <div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>Disciplinas</th>
                <th>1 Bim</th>
                <th>2 Bim</th>
                <th>3 Bim (%)</th>
                <th>4 Bim</th>
                <th>Total</th> 
                <th>Faltas (%)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>Finanças</th>
                <td>20</td>
                <td>30</td>
                <td>20</td>
                <td>30</td>
                <td>100</td>
                <td>0</td>
            </tr>
            <tr>
                <th>Saúde Mental</th>
                <td>20</td>
                <td>30</td>
                <td>20</td>
                <td>30</td>
                <td>100</td>
                <td>0</td>
            </tr>
        </tbody>
    </table>
    <div>
        <h3>Atendimentos</h3>
        <a class="btn btn-secondary btn-md" href="">Adicionar</a>
    </div><br>
    <div>
        <h3>Adivertencias</h3>
        <a class="btn btn-secondary btn-md" href="">Adicionar</a>
    </div>
</div>
        <div class="justify-content-center row">
            <a class="btn btn-primary btn-md" style="margin: 5px" href="{{url('/visualizaralunos')}}"><img src="/conselho/_imagens/voltar.svg" alt="" />Voltar</a>
            <a class="btn btn-primary btn-md" style="margin: 5px" href="{{url('/visualizaralunos')}}">Próximo<img src="/conselho/_imagens/proximo.svg" alt="" /></a>
        </div>
</div>
@endsection
