@extends('inicio')

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
            <th>Operação</th>
          </tr>
        </thead>

        <tbody>
          @foreach($testes as $i)
          <tr>
            <td>{{$i->procedure->name}}</td>
            <td>{{$i->date}}</td>
            <td><a class="btn btn-warning" href="/analiseslab/test/{{ $i->id }}/edit">
                  <i class="fa fa-pencil-square-o fa-lg"></i> Editar</a></td>
          @endforeach
          </tr>
        </tbody>

      </table>

    </div>
  </div>
@endsection
