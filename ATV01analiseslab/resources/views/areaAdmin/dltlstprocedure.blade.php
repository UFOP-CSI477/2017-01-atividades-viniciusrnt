@extends('inicio')

@section('conteudo')

  <div id="tabela">
    <div class="container">
      <br>
      <a href="/areaadmin" class="btn btn-primary"><i class="fa fa-home fa-lg"></i> Voltar ao menu principal</a>
      <br><br>
      <table class="table table-hover table-bordered">
        <thead>
          <tr>
            <th class="text-center">Nome do procedimento</th>
            <th class="text-center">Preço</th>
            <th>Operação</th>
          </tr>
        </thead>

        <tbody>
          @foreach($procedimentos as $i)
          <tr>
            <td>{{$i->name}}</td>
            <td>R$ {{$i->price}}</td>
            <td><a class="btn btn-danger" href="/analiseslab/{{ $i->id }}/">
                  <i class="fa fa-trash-o fa-lg"></i> Excluir</a></td>
          @endforeach
          </tr>
        </tbody>

      </table>

    </div>
  </div>
@endsection
