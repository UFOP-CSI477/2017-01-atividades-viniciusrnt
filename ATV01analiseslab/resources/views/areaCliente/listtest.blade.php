@extends('cabecalho')

@section('titulo')
  Lista de procedimentos agendados
@endsection

@section('conteudo')
  <div id="tabela">
    <div class="container">
      <br>
      <a href="/areacliente" class="btn btn-primary"><i class="fa fa-home fa-lg"></i> Voltar ao menu principal</a>
      <br><br>
      <table class="table table-hover table-bordered">
        <thead>
          <tr>
            <th class="text-center">Nome do procedimento</th>
            <th class="text-center">Data</th>
          </tr>
        </thead>

        <tbody>
          @foreach($testes as $i)
          <tr>
            <td>{{$i->procedure->name}}</td>
            <td>{{$i->date}}</td>
          </tr>
          @endforeach

        </tbody>

      </table>

      <label for="total">Total de exames solicitados: </label> {{$total}}<br>
      <label for="valortotal">Valor total dos exames: </label> R$ {{$valortotal}}

    </div>
  </div>
@endsection
