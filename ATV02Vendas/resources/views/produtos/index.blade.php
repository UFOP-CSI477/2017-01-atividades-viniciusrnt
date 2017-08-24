@extends('principal')

@section('conteudo')

<div class="container">
  <h1>Visualizar produtos</h1><br>
  <a href="/produtos/create" class="btn btn-info"><i class="fa fa-plus-circle" aria-hidden="true"></i> Adicionar novo produto</a><br><br>
  <table class="table table-hover">
    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>Preço</th>
      <th>Editar</th>
      <th>Excluir</th>
    </tr>
  @foreach($produtos as $p)
  <tr>
    <td>{{$p->id}}</td>
    <td>{{$p->nome}}</td>
    <td>R$ {{$p->preco}}</td>
    <td><a href="/produtos/{{$p->id}}/edit" class="btn btn-info"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
    <td><a href="/produtos/{{$p->id}}/" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
  </tr>
  @endforeach
  </table>
  </div>
@endsection
