@extends('principal')

@section('conteudo')
  <h1>Detalhes do produto</h1>

  Nome: {{ $produto->nome }}<br>
  Preço: {{ $produto->preco }}<br>

  <form class="" action="/carrinho/adicionar/{{$produto->id}}" method="post">

    {{csrf_field()}}

    <input type="text" name="quantidade" value="1">
    <input type="submit" value="Adicionar ao carrinho">
  </form>

@endsection
