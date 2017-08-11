@extends('cabecalho')

@section('titulo')
  Tornar um usuário administrador
@endsection

@section('conteudo')
<div class="container">
  <br>
  <a href="/areaadmin" class="btn btn-primary"><i class="fa fa-home fa-lg"></i> Voltar ao menu principal</a>
  <br>
  <form action="/user/{{$usuario->id}}" method="post">

    {{ csrf_field() }}
    {{ method_field('PATCH')}}

    <br><br>

    <div class="row">
      <div class="col-md-5">
        <label for="nome">Nome do usuário:</label>
        <div class="form-group">
          <select class="form-control" name="id" >
            <option value="0">Selecione...</option>
            @foreach($usuario as $u)
              <option value="{{ $u->id }}">{{$u->name}}</option>
            @endforeach
          </select>
        </div>
      </div>

      <div class="col-md-5">
        <label for="tipo">Tipo de usuário:</label>
        <div class="form-group">
          <select class="form-control" name="type">
            <option value="0">Selecione...</option>
            <option value="1">Administrador</option>
            <option value="2">Operador</option>
            <option value="3">Paciente</option>
          </select>
        </div>
      </div>
    </div>

    <br>

    <input class="form-control" type="text" name="user_id">
    <br>
    <input type="submit" class="btn btn-success" name="botaoSalvar" value="Salvar dados">




  </form>
</div>

@endsection
