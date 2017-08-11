@extends('cabecalho')

@section('titulo')
  Editar tipo do usuário
@endsection

@section('conteudo')
<div class="container">
  <br>
  <a href="/areaadmin" class="btn btn-primary"><i class="fa fa-home fa-lg"></i> Voltar ao menu principal</a>
  
  <form action="/user/{{$user->id}}" method="post">

    {{ csrf_field() }}
    {{ method_field('PATCH')}}

    <br><br>
    <div class="col-md-5">
      <select class="form-control" name="type">
        <option value="0">Selecione...</option>
        <option value="1">1 - Administrador</option>
        <option value="2">2 - Operador</option>
        <option value="3">3 - Cliente</option>
      </select>
    </div>

    <input type="submit" class="btn btn-success" name="botaoSalvar" value="Salvar dados">
  </form>
@endsection
