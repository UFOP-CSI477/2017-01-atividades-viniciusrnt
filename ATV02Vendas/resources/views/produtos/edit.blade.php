@extends('principal')

@section('conteudo')

<div class="container">
  <h1>Editar dados do produto</h1>
  <form action="/produtos/{{$produto->id}}" method="post">

    {{ csrf_field() }}
    {{ method_field('PATCH')}}

    <div class="row">
      <div class="col-md-6">
        Nome: <input type="text" name="nome" class="form-control" maxlength="100" value="{{$produto->nome}}"><br>
      </div>
      <div class="col-md-6">
        Preço: <input type="text" class="form-control" name="preco" value="{{$produto->preco}}">
      </div>
    </div>
    <br>
    <input type="submit" class="btn btn-warning" name="botaoSalvar" value="Salvar"><br><br>

  </form>
</div>

@endsection
