@extends('cabecalho')

@section('titulo')
  Editar preço de procedimento
@endsection

@section('conteudo')

<div class="container">
  <br>
  <a href="/areaoperador" class="btn btn-primary"><i class="fa fa-home fa-lg"></i> Voltar ao menu principal</a>
  <form action="/analiseslab/{{$procedimento->id}}" method="post">

    {{ csrf_field() }}
    {{ method_field('PATCH')}}

    <br>

    <input class="form-control" type="hidden" name="name" value="{{$procedimento->name}}">

    <div class="row">
      <div class="col-md-5">
        <label for="nome">Preço:</label>
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-usd fa-fw"></i></span>
          <input class="form-control" type="text" name="price" value="{{$procedimento->price}}">
        </div>
      </div>
    </div>
    <input class="form-control" type="hidden" name="user_id">
    <br>
    <input type="submit" class="btn btn-success" name="botaoSalvar" value="Salvar dados">




  </form>
</div>



@endsection
