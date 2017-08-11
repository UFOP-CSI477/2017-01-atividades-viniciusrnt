@extends('cabecalho')

@section('titulo')
  Lista de exames e pacientes
@endsection

@section('conteudo')
<div class="" id="tabela">
  <div class="container">
    <br>
    <a href="/areaadmin" class="btn btn-primary"><i class="fa fa-home fa-lg"></i> Voltar ao menu principal</a>
    <br><br>
    <table class="table table-bordered table-hover">
      <thead>
        <th>Nome do paciente</th>
        <th>Nome do exame</th>
        <th>Preço</th>
        <th>Data</th>
      </thead>

      <tbody>
        @foreach($testes as $t)
        <tr>
          <td>{{$t->user->name}}</td>
          <td>{{$t->procedure->name}}</td>
          <td>{{$t->procedure->price}}</td>
          <td>{{$t->date}}</td>
        </tr>
        @endforeach
        <tfoot>
          <tr>
            <td colspan="3">Total de exames solicitados:</td>
            <td>{{$total}}</td>
          </tr>
        </tfoot>

      </tbody>
    </table>



  </div>

</div>
@endsection
