@extends('principal')

@section('conteudo')

<div class="container">
  <h1>Visualizar entradas</h1>
  <br>
  <a href="/entradas/create" class="btn btn-info"><i class="fa fa-plus-circle" aria-hidden="true"></i> Adicionar nova entrada</a><br><br>

  <table class="table table-bordered table-hover">
    <tr>
      <th>Código</th>
      <th>Produto</th>
      <th>Fornecedor</th>
      <th>Quantidade</th>
      <th>Data</th>
      <th>Editar</th>
      <th>Excluir</th>
    </tr>

    @foreach($entradas as $f)
    <tr>
      <td>{{$f->id}}</td>
      <td>{{$f->produto->nome}}</td>
      <td>{{$f->fornecedores->nome}}</td>
      <td>{{$f->quantidade}}</td>
      <td>{{$f->created_at}}</td>
      <td><a href="/entradas/{{$f->id}}/edit" class="btn btn-info"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
      <td><a href="/entradas/{{$f->id}}/" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
    </tr>
    @endforeach

  </table>

</div>


@endsection
