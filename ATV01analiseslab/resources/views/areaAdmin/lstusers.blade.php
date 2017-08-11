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
            <th class="text-center">Nome usuário</th>
            <th class="text-center">Tipo atual</th>
            <th>Operação</th>
          </tr>
        </thead>

        <tbody>
          @foreach($usuarios as $u)
          <tr>
            <td>{{$u->name}}</td>
            @if ($u->type == 1)
            <td>Administrador</td>
            @elseif ($u->type == 2)
            <td>Operador</td>
            @else
            <td>Paciente</td>
            @endif
            <td><a class="btn btn-default" href="/user/{{ $u->id }}/edit">
                  <i class="fa fa-key fa-lg"></i> Editar tipo</a></td>
          @endforeach
          </tr>
        </tbody>

      </table>

    </div>
  </div>
@endsection
